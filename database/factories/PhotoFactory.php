<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userid         = User::all()->random()->id ;
        $itemid         = Item::all()->random()->id ;
        $photoableid    = $this->faker->randomElement([$userid , $itemid]) ;
        $photoabletype  = $photoableid == $userid ? 'App\Models\User' : 'App\Models\Item' ;
        return [
            'filename'          => $this->faker->randomElement(['1.jpeg','2.jpeg','3.jpeg','4.jpeg','5.jpeg','6.jpg','7. jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg']),
            'photoable_id'      => $photoableid , 
            'photoable_type'    => $photoabletype 
        ];
    }
}
