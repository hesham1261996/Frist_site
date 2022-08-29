<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description'=> $this->faker->text(100),
            'price'=>$this->faker->randomFloat(),
            'category_id'=>Category::all()->random()->id

        ];
    }
}
