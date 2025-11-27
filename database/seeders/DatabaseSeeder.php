<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // AHORA LLAMAMOS A TU ARCHIVO LOCAL (Sin la ruta larga de Lunar)
        $this->call(LanguageSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(ChannelSeeder::class);

        // El resto sigue igual...
        $this->call(CollectionSeeder::class);
        $this->call(CollectionUrlSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(TaxSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ShippingSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
