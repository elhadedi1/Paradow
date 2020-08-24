@extends('site/layout/main')
@section('content')
<div class="container">
<form class="searchBox" style="display: none;" method="get" action="{{url('/search')}}">
							{{csrf_field()}}
        <input type="text" name="search" placeholder="{{trans('main.searchNow')}}">
        <span id="cancel">
        <i class="fa fa-times"></i></span>
    </form>

  </div>
<div class="seller">
<div class="container">
<br>
<br>
        <div class="offset-3 col-md-6">    @include('site.layout.includes.massage')       </div>

	<div class="row" id="main">
     
        <div class="col-md-12 well" id="rightPanel">
  

    <h4 class="ml-5">{{trans('main.addPhoto')}}</h4>

    <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal ml-5 mr-5" action="{{ route('categories.add') }}"  method="post" novalidate="novalidate">
    <hr class="colorgraph">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
       
                                           <div class="panel-body">      
             
           <div class="form-group row @if($errors->has('categoryName')) has-error @endif">
           <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.catName')}}</label>
                                    <div class="col-md-6">
                                      <select class="form-control" name="categoryName">
                                           <option value="people"> People</option>
                                           <option value="nature">Nature</option>
                                           <option value="animal">Animal</option>
                                           <option value="other">Others</option>
                                       </select>
                                       <strong class="help-block">{{ $errors->first('categoryName') }}</strong> 
                     </div>
         </div>

         @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)                                      

<div class="form-group row @if($errors->has('title')) has-error @endif">
  <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.titleImage')}}</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" id="inputPassword" placeholder="{{trans('main.titleImage')}} ({{$key}})" name="title[{{$key}}]">
    <strong class="help-block">{{ $errors->first('title') }}</strong> 

  </div>
</div>
       
<div class="form-group row @if($errors->has('description')) has-error @endif">
  <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.descriptionImg')}}</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" id="inputPassword" placeholder="{{trans('main.descriptionImg')}} ({{$key}})" name="description[{{$key}}]">
    <strong class="help-block">{{ $errors->first('description') }}</strong> 

  </div>
</div>
 <hr>
         @endforeach  
       
         <div class="form-group row">
           <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.stateOfImg')}}</label>
           <div class="col-sm-6">
         <div class="form-check">
         <input class="form-check-input" type="radio" name="state" id="exampleRadios1" value="1" checked>
         <label class="form-check-label" for="exampleRadios1">  {{trans('main.special')}} </label>
       </div>
       <div class="form-check">
         <input class="form-check-input" type="radio" name="state" id="exampleRadios1" value="0" checked>
         <label class="form-check-label" for="exampleRadios1">  {{trans('main.normal')}} </label>
       </div>
       </div></div>
       
         <div class="form-group row @if($errors->has('image')) has-error @endif">
           <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.image')}}<strong style="font-size:12px;color:red;">*(.SVG)</strong></label>
           <div class="col-sm-6">
             <input type="file" class="form-control" id="inputPassword" name="image">
             <strong class="help-block">{{ $errors->first('image') }}</strong> 
       
           </div>
         </div>
             <div class="form-group row @if($errors->has('imageOnWall')) has-error @endif">
           <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.image')}} <strong style="font-size:12px;color:red;">*(.PNG or .JPG)</strong></label>
           <div class="col-sm-6">
             <input type="file" multiple class="form-control" id="inputPassword" name="imageOnWall[]">
             <strong class="help-block">{{ $errors->first('imageOnWall') }}</strong> 
       
           </div>
         </div>
       
         <div class="form-group row @if($errors->has('price')) has-error @endif">
           <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.price')}}</label>
           <div class="col-sm-6">
             <input type="number" class="form-control" id="inputPassword" placeholder="{{trans('main.price')}}" name="price">
             <strong class="help-block">{{ $errors->first('price') }}</strong> 
       
           </div>
         </div>  
       
         <div class="form-group row @if($errors->has('no_of_color')) has-error @endif">
           <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.no_of_color')}}</label>
                                    <div class="col-md-6">
                                      <select class="form-control" name="no_of_color">
                                           <option value="one"> 1</option>
                                           <option value="two">2</option>
                                           <option value="three">3</option>
                                       </select>
                                       <strong class="help-block">{{ $errors->first('no_of_color') }}</strong> 
                     </div>
         </div>   
        
            <button class="btn btn-primary center" type="submit" >{{trans('main.addPhoto')}}</button>
                                                                                                                                                                      
                                           </div>   
                                           
                                           <hr class="colorgraph"> 
                                           <br>
                                           </form>
	</div>
</div>
</div>
</div>
    </div>
    @stop