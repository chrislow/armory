<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use Illuminate\Database\Seeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\ItemTypeSeeder;
use Database\Seeders\ItemRaritySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ItemTypeSeeder::class,
            ItemCategorySeeder::class,
            ItemRaritySeeder::class,
            ItemSeeder::class,
        ]);
    }
}
