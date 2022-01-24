<?php

namespace Database\Seeders;

use App\Models\Review;
use Database\Factories\ReviewFactory;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{

    public function run()
    {
        Review::factory(60)->create();
    }
}
