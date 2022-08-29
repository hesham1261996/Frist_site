<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->name(),
            'phone'     => $this->faker->phoneNumber() ,
            'address'   => $this->faker->address() , 
            'status'    => $this->faker->word() ,
            'price'     => $this->faker->randomElement([100 , 200 , 70 , 60 ,500]) , 
        ];
    }
}
