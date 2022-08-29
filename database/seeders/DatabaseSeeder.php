<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Item;
use App\Models\Order;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        

        Category::factory(10)->create();

        Item::factory(10)->create();
        
        $orders = Order::factory(10)->create();

        foreach($orders as $ordee){
            $item_id = [] ;
            $item_id[] = Item::all()->random()->id;
            $ordee->items()->sync($item_id);
        }

        Comment::factory(10)->create();
        
        
        $users =  User::factory(10)->create();

        foreach($users as $user ){
            $item_id = [] ; 
            $item_id[] = Item::all()->random()->id ;
            $item_id[] = Item::all()->random()->id ;
            $user->items()->sync($item_id);
        }
        

        User::create(array(
            'name' => 'Hesham mohamed' , 
            'email' => 'hesham1261996@gmail.com' , 
            'email_verified_at' => now(),
            'password' => Hash::make('123123123'), 
            'phone_number' => '0101997558023' ,
            'gender' => 'male' , 
            'Admin'  => '1',
            'created_at' => now(),
            'updated_at' => now(),
    ));
    Photo::factory(21)->create();

    }
}
