<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    public function definition()
    {
        return [
            'review'     => $this->faker->sentence(),
            'products_id'=> random_int(1, 40),
            'users_id'   => 1,
        ];
    }
}
