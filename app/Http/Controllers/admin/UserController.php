<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::where('Admin' , '2' )->paginate(15);
        return view('admin.customers.index' , compact('customers') );
    }


    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $return = [
            'name'          => 'required|min:4',
            'email'         => 'required' , 
            'phone_number'  => 'required|integer' , 
            'gender'        => 'required' , 
            'Admin'         => 'required'
        ];
        $this->validate($request , $return);

        $request->merge(['password' => Hash::make($request->get('password'))])->all();

        $user = User::create($request->all());
        
        
        if($user){
            
            if($file = $request->file('image')){
                $filename = $file->getClientOriginalName();
                $fileExtention = $file->getClientOriginalExtension();
                $file_to_store = time() .'_'.explode('.',$filename)[0] .'_.'. $fileExtention ;
                
                $file->move('images' , $file_to_store);
                Photo::create([
                    'filename'          =>   $file_to_store ,
                    'photoable_id'      => $user->id , 
                    'photoable_type'    => 'app\models\User'
                ]);
            }

            return redirect()->route('customers.index');
        }
        return redirect()->route('customers.create');
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
        $user = User::where('id' , $id)->first();
        return view('admin.customers.edit' , compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $rouls = [
            'name'          => 'required|min:4 ',
            'email'         => 'required|min:4|email ',
            'phone_number'  => 'required|integer' , 
            'gender'        => 'required|in:male,female',
            'Admin'         => 'required'
        ];
        $this->validate($request , $rouls) ; 
        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$request->get('password') ? '' : 'password']
        ));
        return redirect()->route('customers.index');

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete() ;
        return redirect()->route('customers.index');
    }
}
