<?php

namespace App\Http\Controllers;
use App\Product;
use Session;
use DB;
use Illuminate\Http\Request;

class productController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=DB::table('products')->get();             
        return view('admin.product.index',compact('product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.product.create");
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
            'name'    => 'required',
            'image'    => 'required',
            'price'    => 'required',

          ],
          [
            'name.required'    => 'Enter name',
            'image.required'    => 'Enter suimagebtitle',
            'price.required'    => 'Enter price',

          ]);
        $product= new Product;
        $product->name= $request->name;
        $product->price= $request->price;
        $img_name=time(). '.' . $request->image->getClientOriginalExtension();
        
        if($request->image == null)
        {
          $request->image= "";
        }
        else{
        $product->image=$img_name;
        }
        $product->save();
        $request->image->move(public_path('images'), $img_name);
        
        Session::flash('save','Data Successfully Saved');
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product=Product::find($id);
      return view('admin.product.show',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product=product::find($id);

         return view('admin.product.edit',compact('product'));
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
            'name'    => 'required',
            'image'    => 'required',
            'price'    => 'required',

          ],
          [
            'name.required'    => 'Enter name',
            'image.required'    => 'Enter suimagebtitle',
            'price.required'    => 'Enter price',

          ]);
        $product=product::find($id);
        $product->name=$request->input('about_title');
        $product->price=$request->input('about_subtitle');
        if($request->image ==null)
        {              $request->image= $product->image;
        }
        else{
          $img_name=time(). '.' . $request->image->getClientOriginalExtension();
            $product->image=$img_name;
        $request->image->move(public_path('images'), $img_name);

        }
        $product->save();
  
        Session::flash('save','Data Updated Successfully');
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tests= product::find($id);
        $tests->destroy($id);    
        Session::flash('error','Record has been deleted');
        return redirect("admin/product");
    }
}
