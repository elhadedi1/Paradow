<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\About;
use Auth;
class UsersController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
              $users = User::orderBy('id', 'desc')->paginate(10);
                return view('user.index', ['users' => $users]);

        }
           else
       {
           return view('site.error');
       }
    }

    public function show($id)
    {
       
     
        $aboutRes=About::all(); 
        $catt=Category::All();
      
              $user = User::find($id);
              if($user)
             {
        $data = [
            'user' => $user,
            'catt' => $catt,
            'aboutRes'=> $aboutRes
        ];

        $data += $this->counts($user);

        return view('user.show',$data);
              }
        
    }

    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);
        $aboutRes=About::all(); 
        $data = [
            'user' => $user,
            'users' => $followings,
            'aboutRes'=> $aboutRes
        ];

        $data += $this->counts($user);

        return view('user.followings', $data);
        
      
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);
        $aboutRes=About::all(); 
        $data = [
            'user' => $user,
            'users' => $followers,
            'aboutRes'=> $aboutRes
        ];

        $data += $this->counts($user);

        return view('user.followers', $data);
       
    }
}
