<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutPage;
use App\Contact;
use App\About;
use App\AboutTitle;
use Session;
use DB;
class aboutController extends Controller
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
        $abouts=DB::table('abouts')->get();    
        $ab=DB::table('about_pages')->get();         
       
        return view('admin.about.index',compact('abouts','ab','msgs','msgsCount'));

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
      $mainTitle=DB::table('about_titles')->get();
      
        return view("admin.about.create",compact('mainTitle','msgs','msgsCount'));
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

            'address'    => 'required|max:50',
            'phone'    => 'required|max:12',
            'email'    => 'required',
            'about_footer'    => 'required|max:500',
            'logo_header'    => 'required|image|mimes:jpg,png|max:500',
            'logo_footer'    => 'image|mimes:jpg,png|max:500',
            'sldier'    => 'image|mimes:jpg,png|max:500',
          ],
          [
            'address.required'    => 'Enter address',
            'phone.required'    => 'Enter phone',
            'email.required'    => 'Enter email',
            'about_footer.required'    => 'Enter about us in footer',
            'logo_header' => 'Choose a Logo For Header'
          ]);
          $img_name=time(). '.' . $request->logo_header->getClientOriginalExtension();
          $img_name2=time(). '.' . $request->logo_footer->getClientOriginalExtension();
          $img_name3=time(). '.' . $request->sldier->getClientOriginalExtension();

        $about= new About;
        $about->email= $request->email;
        $about->address= serialize($request->address);
        $about->phone= serialize($request->phone);
        $about->youtube_link= $request->youtube_link;
        $about->github_link= $request->github_link;
        $about->facebook_link= $request->facebook_link;
        $about->about_footer= serialize($request->about_footer);
        $about->logo_header=$img_name;
        if($request->logo_footer == null || $request->sldier == null)
        {
          $request->logo_footer= "";
          $request->slider= "";

        }
        else{
        $about->logo_footer=$img_name2;
        $about->sldier=$img_name3;
        }
        $about->save();
        $request->logo_header->move(public_path('images'), $img_name);
        $request->logo_footer->move(public_path('images'), $img_name2);
        $request->sldier->move(public_path('images'), $img_name3);

        Session::flash('save','Data Successfully Saved');
        return redirect('admin/about');
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
        $user=About::find($id);
        $fullData1=unserialize($user->address);
        $fullData2=unserialize($user->about_footer);
        $fullData3=unserialize($user->phone);
        return view('admin.about.show',compact('users','fullData1','fullData2','fullData3','msgs','msgsCount'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();
      $about=About::find($id);
      $fullData1=unserialize($about->address);
      $fullData2=unserialize($about->phone);
      $fullData3=unserialize($about->about_footer);
      return view('admin.about.edit',compact('about','fullData1','fullData2','fullData3','msgs','msgsCount'));
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
        'address'    => 'required|max:500',
        'phone'    => 'required|max:500',
        'email'    => 'required|max:500',
        'logo_header'    => 'image|mimes:jpg,png,jpeg|max:1000',
        'logo_footer'    => 'image|mimes:jpg,png,jpeg|max:1000',
        'sldier'    => 'image|mimes:jpg,png,jpeg|max:1000',

      ],
      [
        'address.required'    => 'Enter address',
        'phone.required'    => 'Enter phone',
        'email.required'    => 'Enter email',
        'about_footer.required'    => 'Enter about us in footer',
      ]);

        $about=About::find($id);

        $about->email=$request->input('email');
        $about->address=serialize($request->input('address'));
        $about->phone=serialize($request->input('phone'));
        $about->youtube_link=$request->input('youtube_link');
        $about->github_link=$request->input('github_link');
        $about->facebook_link=$request->input('facebook_link');
        $about->about_footer=serialize($request->input('about_footer'));
        if($request->logo_header == null)
        {
              $request->logo_header= $about->logo_header;
        }
        else{
          $img_name=time(). '.' . $request->logo_header->getClientOriginalExtension();    
        $about->logo_header=$img_name;
        $request->logo_header->move(public_path('images'), $img_name);

        }
        if($request->logo_footer == null)
        {
          $request->logo_footer= $about->logo_footer;
        }
        else{
          $img_name2=time(). '.' . $request->logo_footer->getClientOriginalExtension();
        $about->logo_footer=$img_name2;
        $request->logo_footer->move(public_path('images'), $img_name2);
        }
        if($request->sldier ==null)
        {              $request->sldier= $about->sldier;
        }
        else{
          $img_name3=time(). '.' . $request->sldier->getClientOriginalExtension();
            $about->sldier=$img_name3;
        $request->sldier->move(public_path('images'), $img_name3);

        }
        $about->save();
  
        Session::flash('save','Data Updated Successfully');
        return redirect('admin/about');
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
        $test= About::find($id);
        $test->destroy($id);    
        Session::flash('error','Record has been deleted');
        return redirect("admin/about",compact('msgs','msgsCount'));
    }
}
