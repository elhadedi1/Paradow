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
use App\user_follow;

use App\Download;
use App\feature;
use App\Contact;
use App\cart;
use App\Comment;
use App\AboutTitle;
use App\Profile;
class profileController extends Controller
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
        $catdetails=DB::table('users')->where('id',auth::user()->id)->first();
        $catt=Category::all();
        $comment=Comment::all();
                $followers=user_follow::all();

      //  $rev=DB::table('comments')->where('user_id',auth::user()->id)->first();
        $user=photos::all();
        if(Auth::check())
        {
            
            $users=User::where('id',auth::user()->id)->first();
            return view('site.profile',compact('user','aboutRes','aboutPageRes','about','catdetails','catt','comment','users','followers'));
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                $followers=user_follow::all();

        $ggg = Gallery::all();
        $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
        $category = Category::all();
        if(Auth::check())
        {
            $users=User::where('id',auth::user()->id)->first();
            return view('site.profile')->with('users', $users)->with('ggg', $ggg)->with('about', $about)
            ->with('aboutPageRes', $aboutPageRes)->with('aboutRes', $aboutRes)->with('category', $category)->with('followers',$followers);
         //   return view('story.index',compact('users','aboutRes','aboutPageRes','about','ggg'));
        }
        else{
            return redirect('/');
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

            'title'    => 'required',
            'description'  => 'required',
            'color'  => 'required',
            'width'  => 'required',
            'height'  => 'required',
                'image' => 'required',
          ],
    
          [
            'title.required'    => 'Enter Photo name',
            'description.required'  => 'Enter image description',
            'color.required'  => 'Enter number of Colors',
            'width.required'  => 'Enter Width for Photo',
            'height.required'  => 'Enter Height for Photo',
            'image.required' => 'Choose a Photo'
          ]);
        $users= new Gallery;
        $users->title= $request->title;
        $users->user_id= auth::user()->id;
        $users->description= $request->description;
        $users->color= $request->color;
        $users->width= $request->width;
        $users->height= $request->height;
       
        

        $multipleimg=$request->file('image');
         $images=array();
         
            for($x = 0; $x < count($multipleimg); $x++){
                $img_name=time(). '.' . $multipleimg[$x]->getClientOriginalExtension();
                   $images[$x]=$img_name;
                    $users->image=implode(",",$images);
                  
                    $multipleimg[$x]->move(public_path('/public/images'), $img_name);
    
            }
        
        $users->save();
        Session::flash('save','Done, Uploaded Successfully');
        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                        $followers=user_follow::all();

        $data=Download::all();  
        $aboutRes=About::all();
        $aboutPageRes=AboutPage::all();
        $ggg=Gallery::all();
        $feature=feature::all();
        $mostLiked = Category::orderBy('favProduct', 'desc')->get(); 
        $mostViewed = Category::orderBy('views', 'desc')->take(2)->get();
        $offerphoto=Category::where('offer_id','!=',0)->paginate(3);
        $offer=DB::table('offers')->paginate(3);
        $resentPhoto=DB::table('categories')->paginate(4);
        if(Auth::check())
        {     
             $users=User::where('id',auth::user()->id)->first(); 
             return view('site.profile')->with('users', $users)->with('aboutPageRes', $aboutPageRes)->with('aboutRes', $aboutRes)
             ->with('ggg', $ggg)->with('feature', $feature)->with('mostLiked', $mostLiked)->with('mostViewed', $mostViewed)->with('offerphoto', $offerphoto)
             ->with('offer', $offer)->with('resentPhoto', $resentPhoto)->with('data', $data)->with('followers',$followers);
           //  return view('story.index',compact('data','users','aboutRes','feature','resentPhoto','mostLiked','mostViewed','offer','offerphoto','story'));
        }
        else
        {
           // return view('story.index',compact('data','aboutRes','feature','resentPhoto','mostLiked','mostViewed','offer','offerphoto','story'));
           return view('site.profile')->with('users', $users)->with('aboutPageRes', $aboutPageRes)->with('aboutRes', $aboutRes)
           ->with('ggg', $ggg)->with('feature', $feature)->with('mostLiked', $mostLiked)->with('mostViewed', $mostViewed)->with('offerphoto', $offerphoto)
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
    }

}
