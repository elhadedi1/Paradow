<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;

use Session;
use DB;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users=DB::table('users')->get();         
        return view('admin.users.index',compact('users'));

    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [

            'name'    => 'required|min:5|max:50',
            'email'  => 'email|unique:users',
            'password'  => 'required|min:6|required_with:repassword|same:repassword',
            'repassword'  => 'required|min:6',    
            'phone'  => 'regex:/(01)[0-9]{9}/',           

          ],
    
          [
    
    
            'name.required'    => 'Enter Name',
            'email.required'  => 'Enter Email',
            'password.required'  => 'Enter Password',
            'repassword.required'  => 'Confirm Password',
            'phone.required'  => 'Enter valid Phone Number',

          ]);            
        $users= new User;
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password= bcrypt($request->password);
        $users->repassword= bcrypt($request->repassword);
        $users->role= $request->role;
        if($request->photo == null)
        {
            $users->photo='user_img.png';
        }
        else{
            $img_name=time(). '.' . $request->photo->getClientOriginalExtension();

            $users->photo=$img_name;
            $request->photo->move(public_path('images'), $img_name);
    
        }
        $users->phone= $request->phone;
        $users->city= $request->city;
        $users->creditNo= $request->creditNo;

        $users->save();

        Session::flash('save','Done, Record has added');
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test=User::find($id);
        
        return view('admin.users.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=User::find($id);
         return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   $this->validate(request(), [

             
            'phone'  => 'regex:/(01)[0-9]{9}/',           

          ],
    
          [
    
          
                        'phone.required'  => 'Enter valid Phone Number',

          ]);        
        $user=User::find($id);

        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->phone=$request->input('phone');
        $user->city=$request->input('city');
        $user->creditNo=$request->input('creditNo');
        $user->role=$request->input('role');

        if($request->password == null && $request->repassword == null)
        {
              $request->password= $user->password;
              $request->repassword= $user->repassword;

        }
        else{
            $user->password=bcrypt($request->input('password'));
            $user->repassword=bcrypt($request->input('repassword'));    
        }
        if($request->photo == null)
        {
            $user->photo=$user->photo;
        }
        else{
            $img_name=time(). '.' . $request->photo->getClientOriginalExtension();

            $user->photo=$img_name;
            $request->photo->move(public_path('/images'), $img_name);
    
        }
        $user->save();
        Session::flash('save','تمت تعديل البيانات');
        return redirect('admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test= User::find($id);
        $test->destroy($id);    
        Session::flash('error','تمت مسح البيانات');
        return redirect("admin/users");
    }
}
