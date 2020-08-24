<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feature;
use Intervention\Image\ImageManagerStatic as Image;
use App\Contact;
use Session;
use DB;
class featureController extends Controller
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
        //
        $feature=DB::table('features')->get();   
       return view('admin.feature.index',compact('feature','msgs','msgsCount'));
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
        return view("admin.feature.create",compact('msgs','msgsCount'));
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

            'image'    => 'required|image|mimes:jpg,png|max:500',
            'description'  => 'required',
            'title'  => 'required',
          ],
    
          [
            'image.required'    => 'choose image ',
            'description.required'  => 'Enter description of image',
            'title.required'  => 'Enter title of image',
          ]);
          $feature = new feature;
          $feature->description=serialize($request->description) ;
          $feature->title= serialize($request->title);
          $img_name=time(). '.' . $request->image->getClientOriginalExtension();

          $feature->image=$img_name;
          $request->image->move(public_path('images'), $img_name);
          $feature->save();
          Session::flash('save','Done, Record has added');
          return redirect('admin/feature',compact('msgs','msgsCount'));
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
         $user=feature::find($id);
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
        //
          $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();
        $feature=feature::find($id);
        $fullData1=unserialize($feature->title);
        $fullData2=unserialize($feature->description);

        return view('admin.feature.edit',compact('feature','fullData1','fullData2','msgs','msgsCount'));
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
            'description'  => 'required',
            'title'=>'required'
          ],
    
          [
            'description.required'  => 'Enter description of image',
            'title.required'  => 'Enter title of image',
          ]);
          $feature=feature::find($id);
          $feature->title=serialize($request->input('title'));
          $feature->description=serialize($request->input('description'));
       
          if($request->image == null)
        {
            $feature->image=$feature->image;
        }
        else{
            $img_name=time(). '.' . $request->image->getClientOriginalExtension();

            $feature->image=$img_name;
            $request->image->move(public_path('images'), $img_name);
    
        }
        $feature->save();
        Session::flash('save','Done, Record has added');
        return redirect('admin/feature');
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
        $test= feature::find($id);
        $test->destroy($id);  
        Session::flash('error','Done, Deleted Successfully');  
        return redirect("admin/feature",compact('msgs','msgsCount'));
    }
}
