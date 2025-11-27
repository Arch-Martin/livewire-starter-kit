<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Lunar\Admin\Actions\Products\MapVariantsToProductOptions;
use Lunar\FieldTypes\ListField;
use Lunar\FieldTypes\Text;
use Lunar\FieldTypes\TranslatedText;
use Lunar\Models\Attribute;
use Lunar\Models\Brand;
use Lunar\Models\Collection;
use Lunar\Models\Currency;
use Lunar\Models\Language;
use Lunar\Models\Price;
use Lunar\Models\Product;
use Lunar\Models\ProductOption;
use Lunar\Models\ProductOptionValue;
use Lunar\Models\ProductType;
use Lunar\Models\ProductVariant;
use Lunar\Models\TaxClass;
use App\Jobs\GenerateVariants;

class ProductSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $products = $this->getSeedData('products');

        $attributes = Attribute::get();

        $productType = ProductType::first();

        if (!$productType) {
            $productType = ProductType::create([
                'name' => 'Stock',
            ]);
        }

        $taxClass = TaxClass::getDefault();

        if (!$taxClass) {
            $taxClass = TaxClass::create([
                'name' => 'Default Tax Class',
                'default' => true,
            ]);
        }

        $currency = Currency::getDefault();

        if (!$currency) {
            $currency = Currency::create([
                'code' => 'GBP',
                'name' => 'British Pound',
                'exchange_rate' => 1,
                'decimal_places' => 2,
                'enabled' => true,
                'default' => true,
            ]);
        }

        $collections = Collection::get();

        $language = Language::getDefault();

        DB::transaction(function () use ($products, $attributes, $productType, $taxClass, $currency, $collections, $language) {
            $products->each(function ($product) use ($attributes, $productType, $taxClass, $currency, $collections, $language) {
                $attributeData = [];

                foreach ($product->attributes as $attributeHandle => $value) {
                    $attribute = $attributes->first(fn ($att) => $att->handle == $attributeHandle);

                    if (!$attribute) {
                        continue;
                    }

                    if ($attribute->type == TranslatedText::class) {
                        $attributeData[$attributeHandle] = new TranslatedText([
                            $language->code => new Text($value),
                        ]);

                        continue;
                    }

                    if ($attribute->type == ListField::class) {
                        $attributeData[$attributeHandle] = new ListField((array) $value);
                    }
                }

                $brand = Brand::firstOrCreate([
                    'name' => $product->brand,
                ]);

                $productModel = Product::create([
                    'attribute_data' => $attributeData,
                    'product_type_id' => $productType->id,
                    'status' => 'published',
                    'brand_id' => $brand->id,
                ]);

                \Lunar\Models\Url::create([
                    'slug' => Str::slug($product->attributes->name),
                    'element_type' => $productModel->getMorphClass(),
                    'element_id' => $productModel->id,
                    'language_id' => $language->id,
                    'default' => true,
                ]);

                $variant = ProductVariant::create([
                    'product_id' => $productModel->id,
                    'purchasable' => 'always',
                    'shippable' => true,
                    'backorder' => 0,
                    'sku' => $product->sku,
                    'tax_class_id' => $taxClass->id,
                    'stock' => 500,
                ]);

                if (!count($product->options ?? [])) {
                    Price::create([
                        'customer_group_id' => null,
                        'currency_id' => $currency->id,
                        'priceable_type' => (new ProductVariant)->getMorphClass(),
                        'priceable_id' => $variant->id,
                        'price' => $product->price,
                        'min_quantity' => 1,
                    ]);
                }

                $media = $productModel->addMedia(
                    base_path("database/seeders/data/images/{$product->image}")
                )->preservingOriginal()->toMediaCollection('images');

                $media->setCustomProperty('primary', true);
                $media->save();

                $collections->each(function ($coll) use ($product, $productModel) {
                    if (in_array(strtolower($coll->translateAttribute('name')), $product->collections)) {
                        $coll->products()->attach($productModel->id);
                    }
                });

                if (! count($product->options ?? [])) {
                    return;
                }

                $options = ProductOption::get();

                $optionValues = ProductOptionValue::get();

                $optionValueMapping = collect($product->options)->mapWithKeys(
                    function ($option) {
                        return [
                            $option->name => $option->values
                        ];
                    }
                )->toArray();

                $optionIds = [];

                foreach ($product->options ?? [] as $optionIndex => $option) {
                    // Do we have this option already?
                    $optionModel = $options->first(fn ($opt) => $option->name == $opt->translate('name'));

                    if (! $optionModel) {
                        $optionModel = ProductOption::create([
                            'name' => [
                                $language->code => $option->name,
                            ],
                            'label' => [
                                $language->code => $option->name,
                            ],
                            'shared' => $option->shared,
                            'handle' => Str::slug($option->name),
                        ]);
                    }

                    $optionIds[$optionModel->id] = [
                        'position' => $optionIndex + 1
                    ];

                    foreach ($option->values as $value) {
                        $valueModel = $optionValues->first(fn ($val) => $value == $val->translate('name'));

                        if (! $valueModel) {
                            ProductOptionValue::create([
                                'product_option_id' => $optionModel->id,
                                'position' => $optionIndex,

                                'name' => [
                                    $language->code => $value,
                                ],
                            ]);
                        }
                    }
                }

                if (! count($product->options ?? [])) {
                    return;
                }

                $productModel->productOptions()->sync($optionIds);

                $variants = collect([$variant])->map(function ($variant) use ($product) {
                    return [
                        'id' => $variant->id,
                        'sku' => $variant->sku,
                        'price' => $product->price,
                        'values' => [],
                    ];
                })->toArray();

                $variants = MapVariantsToProductOptions::map($optionValueMapping, $variants, true);

                foreach ($variants as $variant) {
                    if (!$variant['variant_id']) {
                        $variantModel = ProductVariant::create([
                            'product_id' => $productModel->id,
                            'purchasable' => 'always',
                            'shippable' => true,
                            'backorder' => 0,
                            'sku' => $variant['sku'],
                            'tax_class_id' => $taxClass->id,
                            'stock' => 500,
                        ]);
                        $variant['variant_id'] = $variantModel->id;
                    } else {
                        $variantModel = ProductVariant::find($variant['variant_id']);
                    }

                    Price::create([
                        'customer_group_id' => null,
                        'currency_id' => $currency->id,
                        'priceable_type' => (new ProductVariant)->getMorphClass(),
                        'priceable_id' => $variant['variant_id'],
                        'price' => $variant['price'],
                        'min_quantity' => 1,
                    ]);

                    $valueIds = ProductOptionValue::get()->filter(function ($option) use ($variant) {
                        return in_array($option->translate('name'), $variant['values']);
                    })->pluck('id');

                    $variantModel->values()->sync($valueIds);
                }
            });
        });
    }
}
