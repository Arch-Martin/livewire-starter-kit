<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Lunar\Models\Attribute;
use Lunar\Models\AttributeGroup;
use Lunar\Models\Product;

class AttributeSeeder extends AbstractSeeder
{
    public function run(): void
    {
        $attributes = $this->getSeedData('attributes');

        // --- CORRECCIÓN: Crear el grupo si no existe ---
        $attributeGroup = AttributeGroup::first();

        if (!$attributeGroup) {
            $attributeGroup = AttributeGroup::create([
                'attributable_type' => Product::class,
                'name' => 'Main',
                'handle' => 'main',
                'position' => 1,
            ]);
        }
        // -----------------------------------------------

        DB::transaction(function () use ($attributes, $attributeGroup) {
            foreach ($attributes as $attribute) {
                Attribute::create([
                    'attribute_group_id' => $attributeGroup->id,
                    'attribute_type' => $attribute->attribute_type,
                    'handle' => $attribute->handle,
                    'section' => 'main',
                    'type' => $attribute->type,
                    'required' => false,
                    'searchable' => true,
                    'filterable' => false,
                    'system' => false,
                    'position' => $attributeGroup->attributes()->count() + 1,
                    'name' => [
                        'en' => $attribute->name,
                    ],
                    'description' => [
                        'en' => $attribute->name,
                    ],
                    'configuration' => (array) $attribute->configuration,
                ]);
            }
        });
    }
}
