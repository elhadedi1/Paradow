<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CategoryUser;
use App\Product;
use Auth;
use Notification;
use App\User;
use App\Offer;
use Intervention\Image\ImageManagerStatic as Image;
use App\Contact;
use Session;
use DB;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        
         $users=DB::table('categories')->get();   
         $no_of_user=User::get()->count();
         $offer=DB::table('offers')->get();
       
            return view('admin.category.index',compact('users','no_of_user','offer','msgs','msgsCount'));

    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        return view("admin.category.create",compact('msgs','msgsCount'));
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
            'image'=>'required|mimes:svg',
                'imageOnWall'=> 'required',
          ],
    
          [
            'categoryName.required'    => 'Enter Photo name',
            'title.required'  => 'Enter Title of photo',
            'description.required'  => 'Enter Description for Photo',
            'price.required'  => 'Enter Price',
              'image'=>'required',
            'imageOnWall.required' => 'Choose Photo on wall'
          ]);
        $users= new Category;
        $users->categoryName= $request->categoryName;
        $users->user_id= auth::user()->id;
        $users->title= serialize($request->title);
        $users->price= $request->price;
        $users->no_of_color= $request->no_of_color;
        $users->is_approved = 1;
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

        $users->save();
        Session::flash('save','Done, Uploaded Successfully');
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        $user=Category::find($id);
        $fullData1=unserialize($user->title);
        $fullData2=unserialize($user->description);
        return view('admin.category.show',compact('user','fullData1','fullData2','msgs','msgsCount'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Category::find($id);
         $fullData1=unserialize($user->title);
         $fullData2=unserialize($user->description); 
         return view('admin.category.edit',compact('user','fullData1','fullData2','msgs','msgsCount'));
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
 'image'=>'required|mimes:svg',
                'imageOnWall'=> 'required',
                ],
    
          [
            'categoryName.required'    => 'Enter Photo name',
            'title.required'  => 'Enter Title of photo',
            'description.required'  => 'Enter Description for Photo',
            'price.required'  => 'Enter Price',
                          'image'=>'required',
            'imageOnWall.required' => 'Choose Photo on wall'

          ]);
          
        $user=Category::find($id);

        $user->categoryName=$request->input('categoryName');
        $user->title=serialize($request->input('title'));
        $user->description=serialize($request->input('description'));
        $user->state=$request->input('state');
        $user->is_approved=$request->input('is_approved');
                $multipleimg=$request->file('imageOnWall');
                $images=array();
      if($request->imageOnWall == null)
        {
          $request->imageOnWall= $user->imageOnWall;
        }
        else{
            for($x = 0; $x < count($multipleimg); $x++){
                $img_name=time(). '.' . $multipleimg[$x]->getClientOriginalExtension();
                   $images[$x]=$img_name;
                    $user->imageOnWall=implode(",",$images);
                  
                    $multipleimg[$x]->move(public_path('/images'), $img_name);
                    // $users->width=Image::make('public/images/'. $img_name)->width();
                    // $users->height=Image::make('public/images/'. $img_name)->height();
                  
            }        }
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
        return redirect('admin/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        $test= Category::find($id);
        $test->destroy($id);  
        Session::flash('error','Done, Deleted Successfully');  
        return redirect("admin/category",compact('msgs','msgsCount'));
    }


    //     /**
    //  * Approve post
    //  */
    // public function approvePost(Request $request,$id){
    //     $user=Category::find($id);
    //     $user->is_approved=$request->input('is_approved');
    //     $user ->save();
    //     return redirect('/admin/category');
    // }

    // // /**
    // //  * Approve post
    // //  */
    // // public function hidePost(Request $request,$id){
    // //     $user=Category::find($id);
    // //     $user->is_approved=$request->input('is_approved');
    // //     $user->save();
    // //     return redirect('/admin/category');
    // // }

    public function hidePost($id)
    { 
         $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

       // $pendingData = category::where('is_approved', false)->get();
       $hide=Category::where('id',$id)->first();
       $hide->is_approved=0;
       $hide->save();
        return redirect('admin/category',compact('msgs','msgsCount'));
    }

    public function approve($id)
    {
    
     $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        $users =Category::where('id',$id)->first();
        $usera =User::select('id')->where('id',$users->user_id)->first();

            $users->is_approved = 1;
            $users->save();
            Notification::send($usera,new \App\Notifications\msgNotify($users));

            return redirect('admin/category',compact('msgs','msgsCount'));
    }
}
