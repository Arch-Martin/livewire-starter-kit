<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Lunar\Models\Collection;
use Lunar\Models\Language;
use Lunar\Models\Url;
use Illuminate\Support\Str;

class FixCollectionUrls extends Command
{
    protected $signature = 'fix:collection-urls';
    protected $description = 'Fix collection URL relationships';

    public function handle()
    {
        $language = Language::getDefault();
        
        // Delete all existing collection URLs
        Url::where('element_type', Collection::class)->delete();
        
        $collections = Collection::all();
        
        foreach ($collections as $collection) {
            $name = $collection->translateAttribute('name');
            if (!$name) {
                $this->error("Collection {$collection->id} has no name");
                continue;
            }

            $url = Url::create([
                'slug' => Str::slug($name),
                'element_type' => Collection::class,
                'element_id' => $collection->id,
                'language_id' => $language->id,
                'default' => true,
            ]);
            
            $this->info("Created URL for collection '{$name}': {$url->slug} (element_id: {$url->element_id})");
        }
        
        $this->info("\nVerifying URLs...");
        $urls = Url::where('element_type', Collection::class)->with('element')->get();
        foreach ($urls as $url) {
            $hasElement = $url->element ? 'YES' : 'NO';
            $this->info("Slug: {$url->slug} | Element ID: {$url->element_id} | Has Element: {$hasElement}");
        }
        
        return 0;
    }
}
