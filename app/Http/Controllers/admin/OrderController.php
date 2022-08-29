<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders  = Order::orderBy('id' , 'desc')->simplePaginate(15);

        return view('admin.orders.index' , compact('orders'));
        
    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Order $order)
    {
        
    
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->back();
    }
}
