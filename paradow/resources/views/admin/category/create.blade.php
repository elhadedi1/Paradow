@extends('admin/layout/main')

@section('content')
    
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Galleries</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="/admin">Dashboard</a></li>
                                    <li><a href="#">Galleries</a></li>
                                    <li class="active">Add Photo</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
                <div class="page-content-wrap">          
                <div class="row" style="margin-right:0px">
                        <div class="col-md-10" style="margin:50px;">                        
                        <h4> Add New Photo</h4>
              <br>
                        
                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/category')}}"  method="post" novalidate="novalidate">
                                    
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="panel-body">    
                                    <div class="form-group row @if($errors->has('categoryName')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">name</label>
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
    <label for="inputPassword" class="col-sm-2 col-form-label">title</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" placeholder="{{$value['name']}}" name="title[{{$key}}]">
      <strong class="help-block">{{ $errors->first('title') }}</strong> 

    </div>
  </div>
         
  <div class="form-group row @if($errors->has('description')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" placeholder="{{$value['name']}}" name="description[{{$key}}]">
      <strong class="help-block">{{ $errors->first('description') }}</strong> 

    </div>
  </div>
   <hr>
           @endforeach  
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">State of Photo</label>
    <div class="col-sm-6">
  <div class="form-check">
  <input class="form-check-input" type="radio" name="state" id="exampleRadios1" value="1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Special
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="state" id="exampleRadios1" value="0" checked>
  <label class="form-check-label" for="exampleRadios1">
    Normal
  </label>
</div>
</div></div>
  <div class="form-group row @if($errors->has('image')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">image</label>
    <div class="col-sm-6">
      <input type="file" multiple class="form-control" id="inputPassword" name="image[]">
      <strong class="help-block">{{ $errors->first('image') }}</strong> 

    </div>
  </div>

  <div class="form-group row @if($errors->has('price')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">price</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="inputPassword" placeholder="price" name="price">
      <strong class="help-block">{{ $errors->first('price') }}</strong> 

    </div>
  </div>          
  <div class="form-group row @if($errors->has('no_of_color')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">no_of_color</label>
                             <div class="col-md-6">
                               <select class="form-control" name="no_of_color">
                                    <option value="one"> 1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                </select>
                                <strong class="help-block">{{ $errors->first('no_of_color') }}</strong> 
              </div>
  </div>                                                                                                    
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-primary center" type="submit" style="width: 100px;
    position: relative;
    left: -485%;
    ">Add Photo</button>
                                        </div>                                                                                                                          
                                    </div>                                               
                                    </form>
                                </div>
                            </div>
                            <!-- END JQUERY VALIDATION PLUGIN -->
                            </div>
                        </div>
                    </div>
                    @stop

