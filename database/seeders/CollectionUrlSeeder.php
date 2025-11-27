<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Collection;
use Lunar\Models\Language;
use Illuminate\Support\Str;

class CollectionUrlSeeder extends Seeder
{
    public function run()
    {
        $language = Language::getDefault();
        $collections = Collection::all();

        foreach ($collections as $collection) {
            $name = $collection->translateAttribute('name');
            if (!$name) {
                continue;
            }

            // Check if URL already exists
            $existingUrl = \Lunar\Models\Url::where('element_type', $collection->getMorphClass())
                ->where('element_id', $collection->id)
                ->first();

            if (!$existingUrl) {
                \Lunar\Models\Url::create([
                    'slug' => Str::slug($name),
                    'element_type' => $collection->getMorphClass(),
                    'element_id' => $collection->id,
                    'language_id' => $language->id,
                    'default' => true,
                ]);
            }
        }
    }
}
