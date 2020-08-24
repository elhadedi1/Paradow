<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Product;
use App\About;
use App\AboutPage;
use App\Download;
use App\feature;
use App\Contact;
use App\cart;
use App\Offer;
use App\Order;
use App\AboutTitle;
use Session;
use DB;
use Redirect;
use Auth;
use App\Comment;
use App\Story;
use App\user_follow;
use App\seller;
use Notification;
// use Sentinel;
// use Reminder;
use Mail;
class siteController extends Controller
{
    public function index()
    {
        $data=Download::all();  
        $aboutRes=About::all();   
        $aboutPageRes=AboutPage::all();   
        $feature=feature::all();
        $mostLiked = Category::where('id','!=',1)->orderBy('favProduct', 'desc')->get(); 
        $mostViewed = Category::orderBy('views', 'desc')->take(2)->get(); 
        $offerphoto=Category::where('offer_id','!=',0)->paginate(3);
        $offer=DB::table('offers')->orderBy('id', 'desc')->paginate(3);
        $resentPhoto=DB::table('categories')->orderBy('id', 'desc')->paginate(4);
        $story=DB::table('stories')->orderBy('id', 'desc')->paginate(3);
        if(Auth::check())
        {     
             $users=User::where('id',auth::user()->id)->first(); 
             $visitors=User::where('id',auth::user()->id)->update(['visitor'=>1]);
             //$notification = $users->notifications()->where('id',auth::user()->id)->first();
              //$rev=DB::table('comments')->where('user_id',auth::user()->id)->first();
             return view('site.index',compact('data','users','aboutRes','feature','resentPhoto','mostLiked','mostViewed','offer','offerphoto','story'));
        }
        else
        {
            return view('site.index',compact('data','aboutRes','feature','resentPhoto','mostLiked','mostViewed','offer','offerphoto','story'));

        }
    }
   
    
    public function read($id)
    {   
            if(Auth::check())
        {
        $user = Auth::user();
        
        $notification = $user->notifications()->where('id',$id)->first();
        $notification->markAsRead();
        // dd($notification->data['id']);
        $comment=Comment::all();
        $rev=DB::table('comments')->where('user_id',auth::user()->id)->first();
                return back();
}
    else
    {
             return view('site.error');

    }

    }
    // public function readMsg($id)
    // {
    //     $user =Auth::user();

    //     $notification = $user->notifications()->where('id',$id)->first();
       
    //     return view('site/mesgs',compact('notification'));

    // }

    public function profile1()
    {   if(Auth::check())
        {
        $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
        $catdetails=DB::table('users')->where('id',auth::user()->id)->first();
        $catt=Category::all();
        $comment=Comment::all();
        $photos=DB::table('photos')->get();
        $rev=DB::table('comments')->where('user_id',auth::user()->id)->first();
        $followers=user_follow::all();
        $users=User::where('id',auth::user()->id)->first();
            
        return view('site.profile',compact('users','aboutRes','aboutPageRes','about','catdetails','catt','comment','rev','photos','followers'));
        }
        else
        {
            
        return view('site.error');
        }
    }

            //show Favourites
     public function showFav()
       {    
          $aboutRes=About::all();  
          $catt=Category::all();
          $catdetails=User::where('id',auth::user()->id)->first();
            if(Auth::check())
            { 
           // $catdetails=User::where('id',auth::user()->id)->first();
            return view('site.profile',compact('aboutRes','catt','catdetails'));
            }
            else{
                return redirect('/');
            }
        }

        
   public function profileSetting()
   {
    $aboutPageRes=AboutPage::all();
    $aboutRes=About::all();
    $about=AboutTitle::all();
    $catt=Category::all();
    
    if(Auth::check())
    {
        $users=User::where('id',auth::user()->id)->first();
        return view('site.profileSetting',compact('users','aboutRes','aboutPageRes','about','catt'));
    }
    else{
        return view('site.error');
    }
}


public function userAccount(){
     
    $aboutPageRes=AboutPage::all();
    $aboutRes=About::all();
    $about=AboutTitle::all();
    $catt=Category::all();
    $user=User::all(); 

   if(Auth::check())
   {
       $users=User::where('id',auth::user()->id)->first();
       return view('site.userAccount',compact('aboutPageRes','aboutRes','about','catt','users'));
   }
   else{
       return view('site.error');
   }
  
}


public function viewPosts(){
    $aboutPageRes=AboutPage::all();
    $aboutRes=About::all();
    $about=AboutTitle::all();
    $cat=Category::all();
    
    if(Auth::check())
    {
        $user=User::where('id',auth::user()->id)->first();
        return view('site.viewPosts',compact('user','aboutRes','aboutPageRes','about','cat'));
    }
    else{
        return view('site.error');
    }
    
}

public function becomeSeller(){
    $aboutPageRes=AboutPage::all();
    $aboutRes=About::all();
    $about=AboutTitle::all();
    $catt=Category::all();
    $user=User::all();
    
        return view('site.becomeSeller',compact('aboutRes','aboutPageRes','about','catt','user'));
    
}

public function Buy(Request $request){
    $aboutPageRes=AboutPage::all();
    $aboutRes=About::all();
    $about=AboutTitle::all();
    $cat=category::where('id',1)->first();
    if(Auth::check())
    {
        $user=User::where('id',auth::user()->id)->first();
        return view('site.buy',compact('aboutRes','aboutPageRes','about','user','cat'));
    }
    else{
        Session::flash('error','Your must have an account!');
        return back();
    }
 
      
    
}

        public function offer($id)
    {
        $aboutRes=About::all();   
        $aboutPageRes=AboutPage::all();   
        $allOffer=Offer::all();   
        $offer=Offer::find($id);
        $no_of_user=User::get()->count();

        $category_data=Category::all();
        if(Auth::check())
        { 
        $user=User::where('id',auth::user()->id)->first();
        
        return view('site.offer', compact('offer','aboutRes','user','allOffer','aboutPageRes','category_data','no_of_user'));
        }  else{
            
        return view('site.offer', compact('offer','aboutRes','allOffer','aboutPageRes','category_data','no_of_user'));
        }
        }
    public function delfav(Request $request, $id)
    {
        $pos=Category::where('id',$request->id)->first();
        if(Auth::check())
        { 
        $user=User::where('id',auth::user()->id)->first();
        }
        $y=array($user->favProduct);
        $d=explode(',',$user->favProduct);
        $t=0;
        for($i=0;$i<count($d);$i++){
            if($pos->id ==$d[$i]){
              $t +=1;
            
            }
            else {
             $t+=0;
            }
            }
            if($t){
               
            $idd1[]=$pos->id;
               
               $y= array_diff($d,$idd1);
               $x=implode(',',$y);
           
                $idd=$pos->implode('id',',');
                if(Auth::check())
                {
                    $us=User::where('id',auth::user()->id)->update(['favProduct'=>$x]);
                }
                if($pos)
                {
                     $key=$pos->id;
                     if($pos->favProduct >0){
                        $pos->decrement('favProduct');
                        Session::put($key,1);
                     }
                  
                }
            }
            return back();
    }
    public function fav(Request $request, $title)
    {
        $paginate=DB::table('categories')->paginate(6);
        $pos=Category::where('title',$request->title)->first();
     
        if(Auth::check())
        { 
        $user=User::where('id',auth::user()->id)->first();
        }
   
    $y=array($user->favProduct);
   $d=explode(',',$user->favProduct);
for($i=0;$i<count($d);$i++){
    if($pos->id ==$d[$i]){
      $t =true;
      $i=count($d);
    }
    else {
      
     $t=false;
    }
    }
//   
    if(!$t){
        array_push($y,$pos->id);
        $x=implode(',',$y);
        // dd($x);
        $idd=$pos->implode('id',',');
        if(Auth::check())
        {
            $us=User::where('id',auth::user()->id)->update(['favProduct'=>$x]);
        }
        if($pos)
        {
             $key=$pos->id;
             
            $pos->increment('favProduct');
            Session::put($key,1);
           
        }
    }
      // 
   
        return back();
    }

// Start Download Page

    public function download(){
        return view('site.download');
    }

// End

    // start about for about page
   public function about(){
    $aboutPageRes=AboutPage::all();  
    $aboutRes=About::all();   
    $about=AboutTitle::all();  
    if(Auth::check())
    { 
    $users=User::where('id',auth::user()->id)->first();
    return view('site.about',compact('users','aboutRes','aboutPageRes','about'));
    }
    else{
    return view('site.about',compact('aboutRes','aboutPageRes','about'));
    }
   }
   //    end about 
   public function showcategory(Request $request, $id)
   {
       $test=Category::all()->where('id',$id); 
       $aboutRes=About::all();   
       $post=Category::where('id',$request->id)->first();
       $comment=Comment::all(); 
       $user=User::all();
       if( $post)
       {
            $key=$post->id;
           $post->increment('views');
           Session::put($key,1);
       }
       else{
           return view('site.error');
       }
       if(Auth::check())
       {     
       $users=User::where('id',auth::user()->id)->first();
       return view('site.catDetails',compact('test','post','aboutRes','comment','users','user'));

       }

       else{
        return view('site.catDetails',compact('test','post','aboutRes','comment','user'));

       }
  
       

   }
//    cart
   public function cart()
   {      
if(!(Auth::check()))
    {
        return view('site.error');
    }
    else
    {
       $aboutRes=About::all();  
    $catdetails=DB::table('carts')->where('user_id',auth::user()->id)->first();
    $catt=Category::all();
    return view('site.cart',compact('aboutRes','catt','catdetails'));
    }
   }

// add to cart 
public function AddToCart(Request $request, $id)
{   
   
 
    if(Auth::check())
    {  
        // check if user has record in cart 
         $cart=DB::table('carts')->where('user_id',auth::user()->id)->first();
        //  $order=Db::table('orders')->where('user_id',auth::user()->id)->first();

         if($cart != null){
     
            $y=array($cart->cat_id);
            $d=explode(',',$cart->cat_id);

      // check if user choose before category
for($i=0;$i<count($d);$i++){
    
if($id ==$d[$i]){
  $t =true;
  $i=count($d);
}
else {
 $t=false;
}
}

if(!$t){
    //   if user doesn't choose before add id to add to card

    array_push($y,$request->id);
    $x=implode(',',$y);
    $updateCatId=cart::where('user_id',auth::user()->id)->update(['cat_id'=>$x]);
   
}
}
else{
    $cart = new cart;
  
    $cart->cat_id=$id;
    $cart->user_id=auth::user()->id;
    $cart->save();
   
}
         }
         else{
            return view('site.error');

         }
        
    
   

    $aboutRes=About::all();  
    $catdetails=DB::table('carts')->where('user_id',auth::user()->id)->first();
    $catt=Category::all();
   
    return view('site.cart',compact('aboutRes','catt','catdetails'));
}

// delete cat from cart
public function delFromCart(Request $request, $id)
{  
    
    if(Auth::check())
    {  
        // check if user has record in cart 
         $cart=DB::table('carts')->where('user_id',auth::user()->id)->first();
         $y=array($cart->cat_id);
            $d=explode(',',$cart->cat_id);
            for($i=0;$i<count($d);$i++){
             if($d[$i]==$request->id){
                $idd[]=$request->id;
               
                $y= array_diff($d,$idd);
                $x=implode(',',$y);
                $updateCatId=cart::where('user_id',auth::user()->id)->update(['cat_id'=>$x]);
             }
            }
      
    }
    $aboutRes=About::all();  
    $catdetails=DB::table('carts')->where('user_id',auth::user()->id)->first();
    $catt=Category::all();

    return view('site.cart',compact('aboutRes','catt','catdetails'));
}

    public function category()
    {
        $no_of_user=User::get()->count();

        $cat=Category::all();
        $aboutRes=About::all();   
        $aboutPageRes=AboutPage::all();  
        $favProduct_col=DB::table('categories')->first()->favProduct;
        $rate=round(($favProduct_col/$no_of_user)*5);
 
        if(Auth::check())
        { 
          
        $us=Category::where('id',auth::user()->id)->update(['rate'=>$rate]);
        $users=User::where('id',auth::user()->id)->first();
        return view('site.category',compact('cat','users','no_of_user','aboutRes'));
        }
        else{
        return view('site.category',compact('cat','no_of_user','aboutRes'));
        }
    }

    public function search(Request $request)
    {
        $no_of_user=User::get()->count();
            $search=$request->get('search');
        if($request->has('search')){
            $gallery = Category::where('title','like','%'.$search.'%')->get();	
        

    	}else{
    		$gallery = Category::get();
        }
        $aboutRes=About::all(); 
        if(Auth::check())
        { 
        $user=User::where('id',auth::user()->id)->first();
        
        return view('site.search', compact('gallery','aboutRes','user','no_of_user'));
        }  else{
            
        return view('site.search', compact('gallery','aboutRes','no_of_user'));
        }
        

     }

    //  Start Contact 
    public function storeContact(Request $request)
    {   
         $this->validate(request(),[
            'email'  => 'email',
            'msgContent'  => 'required|min:5',

        ]);
         $cat=new Contact;
       $cat->email= request('email');
       $cat->msgContent= request('msgContent');
       $cat->save();
    
       Session::flash('save','Your Message has been sent successfully');
     
       return back();
    }
    // End Contact
    // Start signup, login and logout from site
    public function create()
    {
        return view('site.signup');
    }
    public function signup()
    {
             if(!(Auth::check()))
       {
                $signup=User::all();
        $aboutRes=About::all();   
        $aboutPageRes=AboutPage::all();  
        return view('site.signup',compact('signup','aboutRes'));

       }
       else{
           return view('site.error');
       }
    }

    public function resetPassword(Request $request, $token = null)
    {
        $signup=User::all();
        $aboutRes=About::all();   
        $aboutPageRes=AboutPage::all();  
        
        return view('site.reset',compact('signup','aboutRes','aboutPageRes'))->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    // public function showLinkRequestForm(Request $request, $token = null)
    // {
    //     $signup=User::all();
    //     $aboutRes=About::all();   
    //     $aboutPageRes=AboutPage::all();  
        
    //     return view('site.forget',compact('signup','aboutRes','aboutPageRes'));
    // }
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'    => 'required|min:5|max:50',
            'email'  => 'email|unique:users',
            'password'  => 'required|min:6|required_with:repassword|same:repassword',
            'repassword'  => 'required|min:6',

        ]);
        $users= new User;
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password= bcrypt($request->password);
        $users->repassword= bcrypt($request->repassword);
        $users->photo='person2.png';
        $users->save();
        Session::flash('save','Completley Success');
    
        return back();

    }
   
    public function login()
    {
       return view('site.signup');
    }
public function signin()
{
   if(! ( auth()->attempt(request(['email','password'])) )  )
   {
       return back()->withErrors(['massage '=> 'email or password incorrect',
       
       ]);
   }

   return redirect('/');
}

public function destroy()
{  
    $id=  auth::user()->id;        
    $visitors=User::where('id',$id)->where('visitor',1)->update(['visitor'=>0]);
    Auth::logout();
    Session::flush();
    return redirect('/');
    
}

    // End signup, login and logout from site

   
}
