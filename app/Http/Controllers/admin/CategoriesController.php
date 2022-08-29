<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function __construct() {
        $this->middleware(['admin']);
    }

    public function index()
    {
        $categories = Category::orderBy('id' , 'desc')->get();
        return view('admin.categories.home' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roules = [
            'title'         => 'required|min:4|max:15',
            'description'   =>  'required|min:4|max:50' , 
        ];
        $this->validate($request , $roules) ; 
        $category = Category::create($request->all());
        if($category) {
            if($file = $request->file('image')){
                $fileName       = $file->getClientOriginalName();
                $fileExtention  = $file->getClientOriginalExtension();
                $file_to_store  = time() .'_'. explode('.' , $fileName)[0] .'_.'. $fileExtention ;

                $file->move('images' , $file_to_store) ; 
                Photo::create([
                    'filename'      => $file_to_store ,
                    'photoable_id'  => $category->id,
                    'photoable_type'=> 'App\Models\Category'
                ]);
            }
            return redirect()->route('categories.index');
        }else{
            return redirect()->route('categories.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        $roules = [
            'title'         => 'required|min:4|max:15',
            'description'   =>  'required|min:4|max:50' , 
        ];
        $this->validate($request, $roules);
        
        if($category->update($request->all())){
            return redirect()->route('categories.index');
        }else{
            
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');

    }
}
