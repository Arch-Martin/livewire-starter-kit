<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Lunar\FieldTypes\Text;
use Lunar\FieldTypes\TranslatedText;
use Lunar\Models\Collection;
use Lunar\Models\CollectionGroup;
use Lunar\Models\Language;

class CollectionSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $collections = $this->getSeedData('collections');
        $language = Language::getDefault();

        // Intenta buscar el primero, si no existe (es null), crea uno nuevo.
        $collectionGroup = CollectionGroup::first();

        if (!$collectionGroup) {
            $collectionGroup = CollectionGroup::create([
                'name' => 'Main',
                'handle' => 'main',
            ]);
        }

        DB::transaction(function () use ($collections, $collectionGroup, $language) {
            foreach ($collections as $collection) {
                Collection::create([
                    'collection_group_id' => $collectionGroup->id,
                    'attribute_data' => [
                        'name' => new TranslatedText([
                            $language->code => new Text($collection->name),
                        ]),
                        'description' => new TranslatedText([
                            $language->code => new Text($collection->description),
                        ]),
                    ],
                ]);
            }
        });
    }
}
