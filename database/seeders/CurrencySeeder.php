<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Currency;

class CurrencySeeder extends Seeder
{
    public function run()
    {
        // Crear la moneda Peso Chileno si no existe
        if (!Currency::where('code', 'CLP')->exists()) {
            Currency::create([
                'code' => 'CLP',
                'name' => 'Peso Chileno',
                'exchange_rate' => 1,
                'decimal_places' => 0, // El peso chileno no usa decimales
                'enabled' => true,
                'default' => true,
            ]);
        }
    }
}
