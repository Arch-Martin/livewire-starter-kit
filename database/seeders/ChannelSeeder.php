<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Channel;

class ChannelSeeder extends Seeder
{
    public function run()
    {
        if (!Channel::where('handle', 'webstore')->exists()) {
            Channel::create([
                'name' => 'Webstore',
                'handle' => 'webstore',
                'default' => true,
                'url' => 'http://localhost:8000',
            ]);
        }
    }
}
