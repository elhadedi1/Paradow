<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\Category;
use App\User;
use Session;
use DB;
use App\Contact;
class offerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                 $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        $offers=DB::table('offers')->get();   
     
        return view('admin.offer.index',compact('offers','msgs','msgsCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                 $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        return view("admin.offer.create",compact('msgs','msgsCount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(), [

            'offer'    => 'required',
            'description'  => 'required|max:100',
            'title'  => 'required|max:100',
          ],
    
          [
            'offer.required'    => 'Enter your offer photo ',
            'description.required'  => 'Enter description of offer',
            'title.required'  => 'Enter title of offer',
          ]);
          $offers = new Offer;
          $offers->description=serialize($request->description);
          $offers->title= serialize($request->title);
          $offers->offer= $request->offer;
          $offers->save();
          Session::flash('save','Done, Record has added');
          return redirect('admin/offer');
    }
    public function editOffer(Request $request,$id)
    { 
         $users=DB::table('categories')->get();   
         $no_of_user=User::get()->count();
         $offer=DB::table('offers')->get(); 
         $user=Category::find($id);
         $off=(int)$request->offer;
       
         $lastOff=Offer::where('id',$user->offer_id)->first();
      
        if($off==0){
            $user->priceAfterOff=$user->price;
            $offerId=Offer::where('offer',$off)->first();
            $user->offer_id=0;
        }
        else{
            if($user->price==0){
                $user->priceAfterOff=0;
            }
            else{
                $offerId=Offer::where('offer',$off)->first();
                $Afteroffer=$user->price -($user->price*($off/100));
                $user->priceAfterOff=$Afteroffer;
            
                $user->offer_id=$offerId->id;
            }
            
        }
   
              $user->save();
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
                 $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        $offer=Offer::find($id);
        $fullData1=unserialize($offer->title);
        $fullData2=unserialize($offer->description);
        return view('admin.offer.show',compact('offer','fullData1','fullData2','msgs','msgsCount'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function edit($id)
    {
        //
                 $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        $offer=Offer::find($id);
        $fullData1=unserialize($offer->title);
        $fullData2=unserialize($offer->description);    
        return view('admin.offer.edit',compact('offer','fullData1','fullData2','msgs','msgsCount'));
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
        $this->validate(request(), [

            'offer'    => 'required',
            'description'  => 'required',
            'title'  => 'required',
          ],
    
          [
            'offer.required'    => 'Enter your offer ',
            'description.required'  => 'Enter description of offer',
            'title.required'  => 'Enter title of offer',
          ]);
          $offers = Offer::find($id);
          $offers->description=serialize($request->input('description'));
          $offers->title=serialize($request->input('title'));
          $offers->offer= $request->input('offer');
          $offers->save();
          Session::flash('save','Done, Record has added');
          return redirect('admin/offer');
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
                 $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

        $offer= Offer::find($id);
        $offer->destroy($id);  
        Session::flash('error','Done, Deleted Successfully');  
        return redirect("admin/offer",compact('msgs','msgsCount'));
    }
}
