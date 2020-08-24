<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\seller;
use App\About;
use App\photos;
use App\AboutPage;
use App\CategoryUser;
use App\Product;
use Auth;
use App\User;
use App\Offer;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use DB;
use App\Download;
use App\feature;
use App\Contact;
use App\cart;
use App\Comment;
use App\AboutTitle;
use App\Profile;
use App\user_follow;


class photoController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
        $catt=Category::all();

        if(Auth::check())
        {
                                    $followers=user_follow::all();

                    $catdetails=DB::table('users')->where('id',auth::user()->id)->first();
        $rev=DB::table('comments')->where('user_id',auth::user()->id)->first();
        //$photos=DB::table('photos')->get(); 
         $users=photos::all();  
        $comment=Comment::all();
  $photos=photos::all();
        return view('site.profile',compact('users','aboutRes','aboutPageRes','about','catdetails','catt','comment','rev','photos','followers'));
        }
       else
       {
           return view('site.error');
       }

    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
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

            'title'    => 'required',
            'width'  => 'required',
            'height'  => 'required',
            'no_of_color'  => 'required',
                'image' => 'required',
          ],
    
          [
            'title.required'    => 'Enter Photo name',
            'width.required'  => 'Enter Title of photo',
            'height.required'  => 'Enter Description for Photo',
            'no_of_color.required'  => 'Enter Price',
            'image.required' => 'Choose a Photo'
          ]);
        $users= new Photos;
        $users->title= $request->title;
        $users->user_id= auth::user()->id;
        $users->width= $request->width;
        $users->height= $request->height;
        $users->no_of_color= $request->no_of_color;

        $multipleimg=$request->file('image');
         $images=array();
         
            for($x = 0; $x < count($multipleimg); $x++){
                $img_name=time(). '.' . $multipleimg[$x]->getClientOriginalExtension();
                   $images[$x]=$img_name;
                    $users->image=implode(",",$images);
                  
                    $multipleimg[$x]->move(public_path('/images'), $img_name);
    
            }
        
        $users->save();
        Session::flash('save','Done, Uploaded Successfully');
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user=Photos::find($id);
        
        // return view('site.editPhoto',compact('user'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {  
        
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $users=Photos::find($id);
        $users->delete();
        Session::flash('error','Done, Deleted Successfully');  
        return back();
    }
}
