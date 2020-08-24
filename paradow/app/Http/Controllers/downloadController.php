<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use Intervention\Image\ImageManagerStatic as Image;

use Session;
use DB;
class downloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $test=DB::table('downloads')->get();         
        return view('admin.download.index',compact('test'));

    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.download.create");
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

            'text_en'    => 'required',

          ],
    
          [
            'text_en.required'    => 'ادخل الاسم',
          ]);
        $test= new Download;
        $test->text_en=serialize($request->text_en) ;

                $img_name=time(). '.' . $request->image->getClientOriginalName();
                $test->image=$img_name;
                $request->image->move(public_path('website/images'), $img_name);
                $test->width=Image::make('public/website/images/'. $img_name)->width();
                $test->height=Image::make('public/website/images/'. $img_name)->height();

        $test->save();

        Session::flash('save','تم تسجيل البيانات');
        return redirect('admin/download');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test=Download::find($id);
        
        return view('admin.download.show',compact('test'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user=Download::find($id);
         return view('admin.download.edit',compact('user'));
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
        
        $user=Download::find($id);

        $user->title=$request->input('title');
        $img=$request->pictures;
        // dd($img);
        if( $img !=null){
            $img_name=time(). '.' . $request->pictures->getClientOriginalExtension();
            $user->pictures=$img_name;
            $request->pictures->move(public_path('Baya3Online/images'), $img_name);
        }
        
       

        $user->save();
        Session::flash('save','تم تعديل البيانات');
        return redirect('admin/download');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test= Trademark::find($id);
        $test->destroy($id);
        Session::flash('error','تمت مسح البيانات');    
        return redirect("admin/trademark");
    }
}
