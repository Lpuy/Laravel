<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goods>
 */
class GoodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>'Goods '. fake()->name(),
            'object' => fake()->text(),
            'text' => fake()->text(),
            'price' => fake()->numberBetween(1, 10),
            'amount' => fake()->numberBetween(0, 20),
            'sub_categories_id' => fake()->numberBetween(52,53)
        ];
    }

}
