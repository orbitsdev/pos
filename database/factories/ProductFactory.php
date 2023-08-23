<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          
            'name' => $this->faker->name(),
            'id_number' => $this->faker->unique()->randomNumber(2),
            'bar_code' => $this->faker->unique()->randomNumber(2),
            'price' => $this->faker->randomNumber(3),
        ];
    }
}
