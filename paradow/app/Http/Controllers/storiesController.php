<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\About;
use App\AboutPage;
use App\CategoryUser;
use Auth;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use DB;
use App\AboutTitle;
use App\Story;

class storiesController extends Controller
{
    public function index()
    { 
        $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
        $catt=Category::all();
        $story=Story::all();
        if(Auth::check())
        {
                    $catdetails=DB::table('users')->where('id',auth::user()->id)->first();
            $users=User::where('id',auth::user()->id)->first();
            return view('site.storyCreate')->with('users', $users)->with('aboutPageRes', $aboutPageRes)->with('aboutRes', $aboutRes)
            ->with('story', $story)->with('about', $about)->with('catdetails', $catdetails)->with('catt', $catt);
        }
        else{
            
            Session::flash('error','Your must have an account!');

            return back();

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $story = story::all();
        $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
        $category = Category::all();
        if(Auth::check())
        {
            $users=User::where('id',auth::user()->id)->first();
            return view('site.storyCreate')->with('users', $users)->with('story', $story)->with('about', $about)
            ->with('aboutPageRes', $aboutPageRes)->with('aboutRes', $aboutRes)->with('category', $category);
        }
        else{
                    Session::flash('error','Your must have an account!');

            return back();
        }
        
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

            'name'    => 'required',
            'story'  => 'required',
            'image' => 'required',
          ],
    
          [
            'name.required'    => 'Enter your name',
            'story.required'  => 'Enter your Story',
            'image.required' => 'Choose a Photo'
          ]);
        $users= new Story;
        $users->name= $request->name;
        $users->user_id= auth::user()->id;
        $users->story= $request->story;
       
        

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
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Download::all();  
        $aboutRes=About::all();
        $aboutPageRes=AboutPage::all();
        $story=Story::all();
        $feature=feature::all();
        $mostLiked = Category::orderBy('favProduct', 'desc')->get(); 
        $mostViewed = Category::orderBy('views', 'desc')->take(2)->get();
        $offerphoto=Category::where('offer_id','!=',0)->paginate(3);
        $offer=DB::table('offers')->paginate(3);
        $resentPhoto=DB::table('categories')->paginate(4);
        if(Auth::check())
        {     
             $users=User::where('id',auth::user()->id)->first(); 
             return redirect('/')->with('users', $users)->with('aboutPageRes', $aboutPageRes)->with('aboutRes', $aboutRes)
             ->with('story', $story)->with('feature', $feature)->with('mostLiked', $mostLiked)->with('mostViewed', $mostViewed)->with('offerphoto', $offerphoto)
             ->with('offer', $offer)->with('resentPhoto', $resentPhoto)->with('data', $data);
        }
        else
        {
           return redirect('site.storyCreate')->with('users', $users)->with('aboutPageRes', $aboutPageRes)->with('aboutRes', $aboutRes)
           ->with('story', $story)->with('feature', $feature)->with('mostLiked', $mostLiked)->with('mostViewed', $mostViewed)->with('offerphoto', $offerphoto)
           ->with('offer', $offer)->with('resentPhoto', $resentPhoto)->with('data', $data);
        }
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
