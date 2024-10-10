<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIDs = DB::table('users')->pluck('id');

        return [
            'uid' => fake()->uuid(),
            'user_id' => fake()->randomElement($userIDs),
            'title' => fake()->name(),
            'description' => fake()->text(),
            'rating' => fake()->randomNumber(3),
        ];
    }
}
