<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment'=>$this->faker->text(50) ,
            'item_id'=>Item::all()->random()->id , 
            'order_id'=>Order::all()->random()->id
        ];
    }
}
