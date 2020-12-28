<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_categories')->insert([
            ['name' => 'sword'],
            ['name' => 'bow'],
            ['name' => 'shield'],
            ['name' => 'potion'],
        ]);
    }
}
