<?php

use Illuminate\Support\Facades\DB;

// Check URLs
$urls = DB::table('lunar_urls')
    ->where('element_type', 'Lunar\Models\Collection')
    ->get();

echo "Collection URLs:\n";
foreach ($urls as $url) {
    echo "ID: {$url->id}, Slug: {$url->slug}, Element ID: {$url->element_id}\n";
}

// Check Collections
$collections = DB::table('lunar_collections')->get();
echo "\nCollections:\n";
foreach ($collections as $collection) {
    echo "ID: {$collection->id}\n";
}
