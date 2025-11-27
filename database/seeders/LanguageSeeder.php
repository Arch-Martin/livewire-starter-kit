<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Language;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        // Creamos el idioma Español por defecto si no existe
        if (!Language::where('code', 'es')->exists()) {
            Language::create([
                'code' => 'es',
                'name' => 'Spanish',
                'default' => true,
            ]);
        }
    }
}
