<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\About;
use App\AboutPage;
use App\Download;
use App\feature;
use App\Contact;
use App\Comment;
use App\cart;
use App\Story;
use App\AboutTitle;
use App\Profile;
use Session;
use DB;
use Auth;
class profileSettingController extends Controller
{
    public function index(){
    
        $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
        $catt=Category::all();
           if(Auth::check())
        {     
       $users=User::where('id',auth::user()->id)->first();
             return view('site.userAccount',compact('aboutPageRes','aboutRes','about','catt','users'));

        }
        else
        {
            return view('site.error');
        }
    }

    public function create(){
        

      
    }

    public function store(Request $request)
    {
    
    
    }

    public function edit($id){
        $aboutRes=About::all();
            if(Auth::check())
        {     
            if($id == Auth::user()->id)
            {
                    $users = User::find($id);
            return view('site.profileSetting',compact('users','aboutRes'));
            }
              else
        {
            return view('site.error');
        }
        }
        else
        {
            return view('site.error');
        }
    }

    public function update($id, Request $request){



        $this->validate(request(), [

            'password'  => 'required|min:6|required_with:repassword|same:repassword',
            'repassword'  => 'required|min:6',    
            'phone'  => 'regex:/(01)[0-9]{9}/',           

          ],
    
          [
    
            'password.required'  => 'Enter Password',
            'repassword.required'  => 'Confirm Password',
            'phone.required'  => 'Enter valid Phone Number',

          ]);    
        $users = User::find($id);

        $users->update([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'city'=>$request->get('city'),
           'creditNo'=>$request->get('creditNo'),
           'role'=>$request->get('role'),
           'photo' =>$request->file('photo'),
        ]);
        if($request->password == null && $request->repassword == null)
        {
              $request->password= $users->password;
              $request->repassword= $users->repassword;

        }
        else{
            $users->password=bcrypt($request->input('password'));
            $users->repassword=bcrypt($request->input('repassword'));    
        }
        if($request->photo == null)
        {
            $users->photo=$users->photo;
        }
        else{
            $img_name=time(). '.' . $request->photo->getClientOriginalExtension();

            $users->photo=$img_name;
            $request->photo->move(public_path('/images'), $img_name);
    
        }
        Session::flash('success','User Update Successfully');
        return redirect('/userAccount');
    }

    public function show($id){
        $users = User::find($id);
        $aboutRes=About::all();
        if (empty($users)) {
            Session::flash('error', 'User not found');
            return redirect('users');
        }
        return view('site.userAccount',compact('users','aboutRes'));  
    }

}
