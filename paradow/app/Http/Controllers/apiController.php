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
use App\cart;
use App\AboutTitle;
use Auth;
use Session;
use DB;
use Validator;
class apiController extends Controller
{
    //
//   Select All Categories
    public function category(){
        $animal=Category::where('categoryName','animal')->get();
        $nature=Category::where('categoryName','nature')->get();
        $people=Category::where('categoryName','people')->get();
        $other=Category::where('categoryName','other')->get();
        
        //$animalImage=Category::select('image')->where('categoryName','animal')->get();
     $otherImage=""; $animalImage=""; $natureImage=""; $peopleImage="";
        foreach($animal as $ani)
        {
            $animalImage=$ani->image;
        }
           foreach($nature as $ani)
        {
            $natureImage=$ani->image;
        }
           foreach($people as $ani)
        {
            $peopleImage=$ani->image;
        }
           foreach($other as $ani)
        {
            $otherImage=$ani->image;
        }
        return response()->json(["message"=>[["name"=>"animal","image"=>$animalImage,"data"=>$animal],["name"=>"nature","image"=>$natureImage,"data"=>$nature],
        ["name"=>"people","image"=>$peopleImage,"data"=>$people],["name"=>"other","image"=>$otherImage,"data"=>$other]
        ]],200);
        }
        
        
        // Select category details by id
    public function catdetails($id){
        $catdetails=Category::find($id);
           $catdetails=Category::find($id);
            if( $catdetails)
       {
            $key=$catdetails->id;
           $catdetails->increment('views');
           Session::put($key,1);
       }
        return response()->json(["message"=>$catdetails],200);
    }
    
    

    // Select Most liked category
   public function mostliked(){
    $mostLiked = Category::orderBy('favProduct', 'desc')->get(); 
    return response()->json(["message"=>$mostLiked],200);
   }
   
//   Select most viewd
   public function mostviewed(){
    $mostViewed = Category::orderBy('views','desc')->take(10)->get(); 
    return response()->json(["message"=>$mostViewed],200);
   }
   
   
//   Favourite Category
   public function fav(Request $request)
   {
       $remmember =$request->remember_token;
      
          $id=$request->id;
       $paginate=DB::table('categories')->paginate(6);
       $pos=Category::where('id',$id)->first();
       $user=User::where('remember_token',$remmember)->first();
       if(!$pos){
        return response()->json(["message"=>"check id category"],400);
       }
       if($user)
       { 
    
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
    
        
        if(!$t){
            array_push($y,$pos->id);
            $x=implode(',',$y);
            // dd($x);
           
            $idd=$pos->implode('id',',');
            
                $us=User::where('remember_token',$remmember)->update(['favProduct'=>$x]);
            
            if($pos)
            {
                 $key=$pos->id;
                 
                $pos->increment('favProduct');
                Session::put($key,1);
               
            }
        }
              return response()->json(["message"=>"love successfully"],200);
       }
       else{
           return response()->json(["message"=>"fail to love must login"],400);
       }
    }
    
    
    
    // Delete Favourite 
    public function delfav(Request $request)
    {
        $remmember =$request->remember_token;
        $id=$request->id;
        $pos=Category::where('id',$id)->first();
        $user=User::where('remember_token',$remmember)->first();
        if(!$pos){
         return response()->json(["message"=>"check id category"],200);
        }
        if($user)
        { 
        
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
               
                    $us=User::where('remember_token',$remmember)->update(['favProduct'=>$x]);
                
                if($pos)
                {
                     $key=$pos->id;
                     if($pos->favProduct >0){
                        $pos->decrement('favProduct');
                        Session::put($key,1);
                     }
                  
                }
            }
            return response()->json(["message"=>"delete love successfully"],200);
        }
        else{
            return response()->json(["message"=>"fail to del love must login"],400);
        }
         
    }
    
    
    
    
    // Signup
    public function createUser(Request $request){
        $rules= [
            'email'  => 'email|unique:users',
                 
          ];  
          $validator = Validator::make($request->all(),$rules);
          
          if($validator->fails()){
                         return response()->json(["message"=>["remember_token"=>'Email Duplicated']],400);
          }
          else{
        $users= new User;
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password= bcrypt($request->password);
        $users->repassword= bcrypt($request->repassword);
        $users->photo='person2.png';
        $users->generateToken();
        }

        $users->save();
        if( $users->save()){
                 return response()->json(["message"=>["remember_token"=>$users->remember_token]],200);
        }
        else{
            return response()->json(["message"=>'Fail'],400);
        }
    
    }
    // Signup flatter
    
    
    // Login
    public function login(){
        if(! ( auth()->attempt(request(['email','password'])) )  )
        {
            return response()->json(["message"=> 'email or password incorrect' ],400);
        }
       
             $user=User::find(auth::user()->id);

             return response()->json(["message"=>["remember_token"=>$user->remember_token,"user data"=> $user]],200);
        
    }
    // login Flatter
    public function loginflatter(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
     
        if (auth()->attempt($credentials)) {
            $user=User::where("id",auth::user()->id)->first();
            return response()->json(["message"=>["info"=>$user,"remmember"=>$user->remember_token]],200);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }
    
    
    // Select a specific user
    public function user($id){
       $user=User::find($id);
        $userFav=User::select('favProduct')->where('id',$id)->get();
        
                  $favExplode=explode(',',$user->favProduct);
                  $userArr=[];
foreach($favExplode as $e)
{
            $userFav2=Category::where('id',$e)->first();
            array_push($userArr,$userFav2);

}
    return response()->json(["message"=>["User Data"=>$user->name,"User Image"=> $user->photo,"User Favourite"=> $user->favProduct,"User Fav"=>$userArr]],200);



    }
    
//         // Recommend to user
//     public function recomUser($id){
//       $user=User::find($id);
//         $userFav=User::select('favProduct')->where('id',$id)->get();
        
//                   $favExplode=explode(',',$user->favProduct);
                  
//                   $userArr=[];                  $userArr2=[];

// foreach($favExplode as $e)
// {
    
//     $userFav2=Category::where('id',$e)->get();
    

//     foreach($userFav2 as $e2)
// {
//         $userFavs2=Category::where([['categoryName',$e2->categoryName],['id','!=',$e2->id]])->get();
//         $userLike=Category::where('id',$e2->id)->first();
//         //  $userFavsss2=User::where('id',$id)->get();
//         //  echo $userFavsss2;
//             array_push($userArr,$userFavs2);

//                  array_push($userArr2,$userLike);

// }

// }

    
//  return response()->json(["message"=>["User Recomnd"=>$userArr,"user Like"=>$userArr2]],200);
//     }
    
    
    
     public function recomUser($id){
        $user=User::find($id);
         $userFav=User::select('favProduct')->where('id',$id)->get();
         $pos=Category::where('categoryName','people')->orwhere('categoryName','nature')->orwhere('categoryName','animal')->orwhere('categoryName','other')->get();


                   $userArr=[]; $userArr2=[]; $y=[]; $x;

foreach($pos as $p)
{
    
    array_push($userArr2,$p->id);
}

$favExplode=explode(',',$user->favProduct);
 foreach($favExplode as $e)
 {
    array_push($userArr,$e);

 }
 
     $x=array_diff($userArr2,$userArr);
    $xx=implode(',',$x);
           
           
           $y=explode(',',$xx);
           $userArr3=[];

         foreach($y as $e2)
            {
      $userFav2=Category::where('id',$e2)->first();
      
      array_push($userArr3,$userFav2);
            }


        
     return response()->json(["message"=>["User Recomd"=>$userArr3,"User Like"=> $userArr]],200);
 
 
 
     }


    
// Select About
public function about(){

    $aboutPageRes=AboutPage::all();  
    $aboutRes=About::all();   
    $about=AboutTitle::all();  

    return response()->json(["message"=>["about page"=>$aboutPageRes,"about info"=>$aboutRes,"about title for about page"=> $about]],200);

     
    
   }
    
}
