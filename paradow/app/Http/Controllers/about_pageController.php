<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutPage;
use App\About;
use Session;
use DB;
use App\Contact;
class about_pageController extends Controller
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
        $ab=DB::table('about_pages')->get();   
        $abouts=DB::table('abouts')->get();          
        return view('admin.about.index',compact('ab','abouts','msgs','msgsCount'));

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
        return view("admin.about.create",compact('msgs','msgsCount'));
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
            'about_title'    => 'required|max:500',
            'about_subtitle'    => 'required|max:500',
            'about_text'    => 'required|max:500',

          ],
          [
            'about_title.required'    => 'Enter title',
            'about_subtitle.required'    => 'Enter subtitle',
            'about_text.required'    => 'Enter text',

          ]);
        $aboutpage= new AboutPage;
        $aboutpage->about_title= $request->about_title;
        $aboutpage->about_subtitle= serialize($request->about_subtitle);
        $aboutpage->about_text= serialize($request->about_text);
        $aboutpage->save();

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
      $test2=AboutPage::find($id);
      $fullData4=unserialize($test2->about_subtitle);
      $fullData5=unserialize($test2->about_text);

      return view('admin.about.showPage',compact('test2','fullData4','fullData5','msgs','msgsCount'));

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
         $about2=AboutPage::find($id);
       
         $fullData4=unserialize($about2->about_subtitle);
         $fullData5=unserialize($about2->about_text);

         return view('admin.about.editPage',compact('about2','fullData4','fullData5','msgs','msgsCount'));
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
        'about_title'    => 'required|max:500',
        'about_subtitle'    => 'required|max:500',
        'about_text'    => 'required|max:500',

      ],
      [
        'about_title.required'    => 'Enter title',
        'about_subtitle.required'    => 'Enter subtitle',
        'about_text.required'    => 'Enter text',

      ]);
        $about=AboutPage::find($id);
        $about->about_title=$request->input('about_title');
        $about->about_subtitle=serialize($request->input('about_subtitle'));
        $about->about_text=serialize($request->input('about_text'));
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
        $tests= AboutPage::find($id);
        $tests->destroy($id);    
        Session::flash('error','Record has been deleted');
        return redirect("admin/about",compact('msgs','msgsCount'));
    }
}
