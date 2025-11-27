<?php

namespace Database\Seeders;

use Lunar\Models\Country;
use Lunar\Models\TaxClass;
use Lunar\Models\TaxRate;
use Lunar\Models\TaxZone;
use Lunar\Models\TaxZoneCountry;

class TaxSeeder extends AbstractSeeder
{
    public function run(): void
    {
        // --- CORRECCIÓN: Crear el País si no existe ---
        $chileCountry = Country::where('iso2', 'CL')->first();

        if (!$chileCountry) {
            $chileCountry = Country::create([
                'iso2' => 'CL',
                'name' => 'Chile',
                'phonecode' => '56',
                'continent' => 'South America',
                'currency' => 'CLP',
            ]);
        }
        // ----------------------------------------------

        // --- CORRECCIÓN: Crear la Zona de Impuestos si no existe ---
        $chileTaxZone = TaxZone::where('name', 'Chile')->first();

        if (!$chileTaxZone) {
            $chileTaxZone = TaxZone::create([
                'name' => 'Chile',
                'zone_type' => 'country',
                'active' => true,
                'default' => true,
            ]);
        }
        // -----------------------------------------------------------

        // Vincular el país a la zona (Evitando duplicados)
        if (!TaxZoneCountry::where('tax_zone_id', $chileTaxZone->id)->where('country_id', $chileCountry->id)->exists()) {
            TaxZoneCountry::create([
                'country_id' => $chileCountry->id,
                'tax_zone_id' => $chileTaxZone->id,
            ]);
        }

        // Crear o buscar la clase de impuesto
        $taxClass = TaxClass::firstOrCreate([
            'name' => 'Default Tax Class',
        ], [
            'default' => true,
        ]);

        // Crear la tasa de impuesto
        TaxRate::factory()->create([
            'tax_zone_id' => $chileTaxZone->id,
            'name' => 'IVA',
            'priority' => 1,
            'percentage' => 19,
        ]);
    }
}
