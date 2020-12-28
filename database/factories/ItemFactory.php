<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\ItemRarity;
use App\Models\ItemType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'item_type' => ItemType::select('id')
                ->inRandomOrder()
                ->first()
                ->id,
            'item_category' => ItemCategory::select('id')
                ->inRandomOrder()
                ->first()
                ->id,
            'item_rarity' => ItemRarity::select('id')
                ->inRandomOrder()
                ->first()
                ->id,
            'size' => rand(1, 4),
            'icon_url' => $this->faker->randomElement([
                'https://ik.imagekit.io/3sl2ubbpu33/Items/weapons/equip_axe_2_DzTM1SzmmI.png',
                'https://ik.imagekit.io/3sl2ubbpu33/Items/weapons/equip_hammer_3_i-NGLxGx2pNq.png',
                'https://ik.imagekit.io/3sl2ubbpu33/Items/weapons/equip_axe_2_DzTM1SzmmI.png'
            ])
        ];
    }
}
