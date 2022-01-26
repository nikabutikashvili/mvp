<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name'        => $this->faker->words(3, true),
            'description' => $this->faker->realText(200),
            'price'       => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
