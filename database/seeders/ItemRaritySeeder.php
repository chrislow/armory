<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemRaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_rarities')->insert([
            [
                'color' => 'blue',
                'drop_chance' => 79.92,
            ],
            [
                'color' => 'purple',
                'drop_chance' => 15.98
            ],
            [
                'color' => 'pink',
                'drop_chance' => 3.2
            ],
            [
                'color' => 'red',
                'drop_chance' => 0.64
            ],
            [
                'color' => 'yellow',
                'drop_chance' => 0.26
            ],
        ]);
    }
}
