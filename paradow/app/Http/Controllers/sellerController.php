<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\seller;
use App\About;
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
use App\AboutTitle;
use App\Profile;

class sellerController extends Controller
{
           /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutRes=About::all();   
        $aboutPageRes=AboutPage::all();  
        if(Auth::check())
        { 

       // $us=Category::where('id',auth::user()->id)->update(['rate'=>$rate]);
        $users=User::where('id',auth::user()->id)->first();
        return view('site.sellerCreate',compact('users','aboutRes','aboutPageRes'));
        }
        else{
       
        Session::flash('error','You must be have an account');
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
        $no_of_user=User::get()->count();

        $cat=Category::all();
        $aboutRes=About::all();   
        $aboutPageRes=AboutPage::all();  
        $favProduct_col=DB::table('categories')->first()->favProduct;
        $rate=round(($favProduct_col/$no_of_user)*5);
 
        return view('site.sellerCreate',compact('cat','no_of_user','aboutRes','aboutPageRes','favProduct_col','rate'));
        
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

            'categoryName'    => 'required',
            'title'  => 'required',
            'description'  => 'required',
            'price'  => 'required',
                'image' => 'required|mimes:svg',
            'imageOnWall' => 'required',

          ],
    
          [
            'categoryName.required'    => 'Enter Photo name',
            'title.required'  => 'Enter Title of photo',
            'description.required'  => 'Enter Description for Photo',
            'price.required'  => 'Enter Price',
            'image.required' => 'Choose a Photo',
            'imageOnWall.required' =>'Choose Image on Wall',
          ]);
          $users= new Category;
        $users->categoryName= $request->categoryName;
        $users->user_id= auth::user()->id;
        $users->title= serialize($request->title);
        $users->price= $request->price;
        $users->no_of_color= $request->no_of_color;

        $users->is_approved = 0;
        
        $no_of_user=User::get()->count();
        
        $rate=($users->favProduct/$no_of_user)*5;
        
        $users->rate= $rate;
        $users->description=serialize($request->description);
        $users->state= $request->state;
     
        $multipleimg=$request->file('imageOnWall');
         $images=array();
         
            for($x = 0; $x < count($multipleimg); $x++){
                $img_name=time(). '.' . $multipleimg[$x]->getClientOriginalExtension();
                   $images[$x]=$img_name;
                    $users->imageOnWall=implode(",",$images);
                  if(! is_file($multipleimg[$x]->move(public_path('/images'), $img_name) )){
                    $multipleimg[$x]->move(public_path('/images'), $img_name);
                  }
            }
                $img_nameWall=time(). '.' . $request->image->getClientOriginalExtension();
            $users->image=$img_nameWall;
            $request->image->move(public_path('/images'), $img_nameWall);
        //   $userId = Auth::user()->id;
        //    $isAdmin = User::findOrFail($userId)->isAdmin;
           $isAdmin= Auth::user()->role;
            if($isAdmin == 1){
                $users->is_approved = 1;
                $users->save();
                    Session::flash('save','Done, Uploaded Successfully');
                              }
            else{
                $users->is_approved = 0;
                $users->save();
                Session::flash('save','Done, wait admin approve');
                }

       
    // if( $users->is_approved = 1){
    //     $users->save();
    //     Session::flash('save','Done, Uploaded Successfully');
    //             }
    //             else{
    //                 Session::flash('save','Done, wait admin approve');
    //             }
        // Session::flash('save','Done, Uploaded Successfully');
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
        $user=Category::all();
        $aboutRes=About::all();  
        $catdetails=DB::table('categories')->where('id',auth::user()->id)->first();
        $catt=Category::all();
        $fullData1=unserialize($user->title);
        $fullData2=unserialize($user->description);
        return view('site.profile',compact('aboutRes','catt','catdetails','user','fullData1','fullData2'));

    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $no_of_user=User::get()->count();
        $cat=Category::all();
        $aboutRes=About::all();   
        $aboutPageRes=AboutPage::all();
         $user=Category::find($id);
         $fullData1=unserialize($user->title);
        $fullData2=unserialize($user->description);
         return view('/category/{id}',compact('user','no_of_user','aboutRes','cat','aboutPageRes','fullData1','fullData2'));
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

            'categoryName'    => 'required',
            'title'  => 'required',
            'description'  => 'required',
            'price'  => 'required',
                'image' => 'required|mimes:svg',
            'imageOnWall' => 'required',

          ],
    
          [
            'categoryName.required'    => 'Enter Photo name',
            'title.required'  => 'Enter Title of photo',
            'description.required'  => 'Enter Description for Photo',
            'price.required'  => 'Enter Price',
            'image.required' => 'Choose a Photo',
            'imageOnWall.required' =>'Choose Image on Wall',
          ]);
        $user=Category::find($id);

        $user->categoryName=$request->input('categoryName');
        $user->title=$request->input('title');
        $user->description=$request->input('description');
        $user->state=$request->input('state');
       // $user->is_approved = 0;
        if($request->imageOnWall == null)
        {
            $user->imageOnWall=$user->imageOnWall;
        }
        else{
            $img_name=time(). '.' . $request->image->getClientOriginalExtension();

            $user->imageOnWall=$img_name;
            $request->imageOnWall->move(public_path('/paradow/images'), $img_name);
    
        }
            // update price and price AFter discount
            if($user->price != $request->input('price')){
            
                $user->price=$request->input('price');
             
                    if($user->price==0){
                        $user->priceAfterOff=0;
                    }
                    elseif($user->offer_id ==0){
                        $user->priceAfterOff=$user->price;
                    }
                    else{
                        $offerId=Offer::where('id',$user->offer_id)->first();
                    
                        $Afteroffer=$user->price -($user->price*($offerId->offer/100));
                        $user->priceAfterOff=$Afteroffer;
                      
                       
                    }
                    
                    
            }
             $img_nameWall=time(). '.' . $request->image->getClientOriginalExtension();

            $user->image=$img_nameWall;
            $request->image->move(public_path('/images'), $img_nameWall);
        $user->save();
      
        Session::flash('save','Done, Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $test= Category::find($id);
        $test->delete($id);  
        Session::flash('error','Done, Deleted Successfully');  
         return redirect('/category');
    }
}
