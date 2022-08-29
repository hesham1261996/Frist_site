<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Photo;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    
    public function __construct() {
        $this->middleware(['admin']);
    }

    public function index()
    {
        $items = Item::orderBy('id' , 'desc')->simplePaginate(15);
        return view('admin.items.home' , compact('items'));
    }


    public function create()
    {

        return view('admin.items.create');
    }


    public function store(Request $request , Item $items)
    {
        $return  = [
            'title'         => 'required|min:4|max:15',
            'description'   => 'required|min:4' , 
            'price'         => 'integer',
            'category_id'   =>'required'
        ];
        $this->validate($request , $return );
        dd($items->photo->filename);
        $create = $items->create($request->all());
        if($create){

            if($file = $request->file('image')){
                $fileName = $file->getClientOriginalName();
                $fielExtention = $file->getClientOriginalExtension();
                $file_to_store = time() .'_'. explode("." , $fileName)[0] ."_.".$fielExtention ; 
                
                $file->move('images' , $file_to_store);

                Photo::create([
                    'filename'        => $file_to_store ,
                    'photoable_id'    => $create->id ,
                    'photoable_type'  => 'App\Models\Item'
                ]);
            }
        
            return redirect()->route('items.index');
        }
            return redirect()->route('items.create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('admin.items.show' , compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('admin.items.edit' ,compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $rouls = [
            'title'         => 'required|min:4|max:15',
            'description'   => 'required|min:4' , 
            'price'         => 'integer',
            'category_id'   =>'required'
        ];
        $this->validate($request , $rouls);
        if($item->update($request->all())){
            return redirect()->route('items.index');
        }else{
            return redirect()->route('items.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
