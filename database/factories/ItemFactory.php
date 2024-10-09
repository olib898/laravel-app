<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ItemFactory extends Factory
{
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uid' => fake()->uuid(),
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->randomNumber(3),
            'imageURL' => fake()->url(),
        ];
    }
}
