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
                        <h4> Add New Offer</h4>
              <br>
                        
                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/offer')}}"  method="post" novalidate="novalidate">
                                    
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="panel-body">  
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

  <div class="form-group row @if($errors->has('offer')) has-error @endif">
    <label for="offer" class="col-sm-2 col-form-label">Offer Ratio</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="offer" placeholder="offer" name="offer">
      <strong class="help-block">{{ $errors->first('offer') }}</strong> 

    </div>
  </div>

  
                                                                                                                        
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-primary center" type="submit" style="width: 100px;
    position: relative;
    left: -485%;
    ">Add Offer</button>
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

