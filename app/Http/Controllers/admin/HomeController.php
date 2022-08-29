<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware(['admin']);
    }
    public function index(){

        $users = User::where('admin' , '1' )->paginate(15);

        $items = Item::all();

        $categories = Category::all();

        $customers = User::where('Admin' , '2')->get() ;

        $orders = Order::where('status' , 'review')->get();

        return view('admin.home' , compact('users' , 'items' , 'categories' , 'customers' , 'orders'));

        
        
    }
}
