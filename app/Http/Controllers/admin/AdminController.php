<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware(['admin']);
    }
    public function index()
    {
        $users = User::where('Admin' , '1' )->paginate(15);
        // $users = User::orderBy('id','desc')->paginate(15);
        return view('admin.admin.index' ,compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rouls = [
            'name' => 'required|min:5',
            'email'=> 'required' , 
            'phone_number'=> 'required|integer' , 
            'gender'=> 'required|in:femal,male' , 
            'Admin' => 'required|in:1,0'

        ];

        $this->validate($request , $rouls) ;
        $request->merge(['password' => Hash::make($request->get('password'))])->all(); 
        $user =  User::create($request->all());

        
        if($user){
            
            if($file = $request->file('image')){
                $filename = $file->getClientOriginalName();
                $fileExtention = $file->getClientOriginalExtension();
                $file_to_store = time() .'_'.explode('.',$filename)[0] .'_.'. $fileExtention ;
                $file->move('images' , $file_to_store);
                Photo::create([
                    'filename' =>   $file_to_store ,
                    'photoable_id' => $user->id , 
                    'photoable_type' => 'app\models\User'
                ]);
            }

            return redirect()->route('admin.index')->withStatus('message' , 'hleoo');
        }
        return redirect()->route('admin.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = User::findOrFail($id);

        return view('admin.admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= User::where('id' , $id)->first();
        return view('admin.admin.edit' , compact('users'));
    }


    public function update(Request $request, User $admin)
    {
        $rouls = [
            'name'          => 'required|min:4 ',
            'email'         => 'required|min:4|email ',
            'phone_number'  => 'required|integer' , 
            'gender'        => 'required|in:male,female',
            'Admin'         => 'required'
        ];
        $this->validate($request , $rouls) ; 
        $admin->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$request->get('password') ? '' : 'password']
        ));
        return redirect()->route('admin.index');
        
    }


    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index');
    }
}
