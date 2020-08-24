<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\About;
use App\AboutPage;
use App\Contact;
use App\AboutTitle;
use App\order;
use App\cart;
use App\Category;
use Session;
use DB;
use Redirect;
use Auth;
class orderController extends Controller
{


    public function index()
    { 
        $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
       
        $cartt=cart::all();
                $catdetails=Category::all();

        if(Auth::check())
        {
       
        $or=DB::table('orders')->where('user_id',auth::user()->id)->first();
        $allor=DB::table('orders')->where('user_id',auth::user()->id)->get();
        $user=User::where('id',auth::user()->id)->first();
    
            return view('site.order',compact('aboutRes','allor','aboutPageRes','about','catdetails','user','cartt','or'));
        }
        else{
            return view('site.error');
        
    }


    }
  
    public function store(Request $request )
    {
        $this->validate(request(), [

            'city'    => 'required',
            'address'  => 'required',
            'phone' => 'required',
          ],
    
          [
            'city.required'    => 'Choose the quantity',
            'address.required' => 'Enter Your address',
            'phone.required' => 'Enter Your phone'

          ]);
        
        $order= new order;
        $order->city= $request->city;
        $order->user_id= auth::user()->id;
        $order->address= $request->address;
        $order->phone= $request->phone;
        $userOrder = DB::table('carts')->where("user_id",auth::user()->id)->first();
        $order->order=$userOrder->cat_id;
        $order->notes= $request->notes;
        $order->save();
      
        cart::destroy($userOrder->id);
        Session::flash('save','Done, Uploaded Successfully');
      $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
       
        $cartt=cart::all();
        $allor=DB::table('orders')->where('user_id',auth::user()->id)->get();
                $catdetails=Category::all();

        return view('site.order',compact('allor','catdetails','aboutRes','about','aboutPageRes'));

    }


    public function edit($id)
    {

        $aboutPageRes=AboutPage::all();
        $aboutRes=About::all();
        $about=AboutTitle::all();
        $user=User::all();
            return view('site.order',compact('aboutRes','aboutPageRes','about','user'));
        
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
        
        $order=Order::find($id);

        $order->quantity=$request->input('quantity');
        $order->country=$request->input('country');
        $order->address=$request->input('address');
        $order->phone=$request->input('phone');
            
        $order->save();
      
        Session::flash('save','Done, Updated Successfully');
        return redirect('site.order');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
Order::destroy($id);  
        Session::flash('error','Done,');  
        return back();
    }
}
