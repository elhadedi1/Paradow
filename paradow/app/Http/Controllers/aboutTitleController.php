<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutTitle;
use Session;
use DB;
use App\Contact;
class aboutTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view("admin.aboutTitle.create",compact('msgs','msgsCount'));
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
            'mainTitle'  => 'required',
          ],
    
          [
            'mainTitle.required'    => 'Enter main title',
          ]);
          $title = new AboutTitle;
          $title->mainTitle= serialize($request->mainTitle);
          $title->save();
          Session::flash('save','Done, Record has added');
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
        //
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
    }
}
