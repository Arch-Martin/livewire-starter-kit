<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Lunar\Models\Country;
use Lunar\Models\Currency;
use Lunar\Models\Price;
use Lunar\Shipping\Models\ShippingMethod;
use Lunar\Shipping\Models\ShippingRate;
use Lunar\Shipping\Models\ShippingZone;
use Lunar\Shipping\Models\ShippingZonePostcode;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currency = Currency::getDefault();

        $standardShipping = ShippingMethod::create([
            'name' => 'Standard Shipping',
            'code' => 'STNDRD',
            'enabled' => true,
            'driver' => 'ship-by',
            'data' => [
                'charge_by' => 'cart_total',
            ]
        ]);

        $chileShippingZone = ShippingZone::create([
            'name' => 'Chile',
            'type' => 'countries',
        ]);

        $chileShippingRate = ShippingRate::create([
            'shipping_zone_id' => $chileShippingZone->id,
            'shipping_method_id' => $standardShipping->id,
            'enabled' => true,
        ]);

        $chileShippingZone->countries()->sync(
            Country::where('iso2', '=', 'CL')->first()->id,
        );

        Price::create([
            'priceable_type' => (new ShippingRate)->getMorphClass(),
            'priceable_id' => $chileShippingRate->id,
            'price' => 1000,
            'min_quantity' => 1,
            'currency_id' => $currency->id,
        ]);

        // Free shipping on $10000 or over orders
        Price::create([
            'priceable_type' => (new ShippingRate)->getMorphClass(),
            'priceable_id' => $chileShippingRate->id,
            'price' => 0,
            'min_quantity' => 10000,
            'currency_id' => $currency->id,
        ]);

    }
}
