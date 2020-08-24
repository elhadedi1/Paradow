@extends('admin/layout/main')

@section('content')
    
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>About Us</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li class="active">Edit Data</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
                <div class="page-content-wrap" style="float:left;">          
                    <div class="row" style="margin-right:0px">
                        <div class="col-md-10" style="margin:50px;">                        
                        <h4> Update Data</h4>
              <br>
                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
     
<!-- Strat Form of about page -->
  <form style="margin-top: 149px;" id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/abouts/'.$about2->id)}}" method="post" novalidate="novalidate">
                                <input type="hidden" name="_method" value="PUT">

                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <hr>
                                <h3>Data in About Page</h3>  <br>
                                <div class="form-group row @if($errors->has('about_title')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">about_title</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$about2->about_title}}" placeholder="about_title" name="about_title">
      <strong class="help-block">{{ $errors->first('about_title') }}</strong> 

    </div>
  </div>  
  @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)                                      
  <div class="form-group row @if($errors->has('about_subtitle')) has-error @endif">
  <label for="inputEmail3" class="col-sm-2 col-form-label">about_subtitle</label>
<div class="col-sm-6">

<input type="text" class="form-control" name="about_subtitle[{{$key}}]" placeholder="" value="{{$fullData4[$key]}}">
<strong class="help-block">{{ $errors->first('about_subtitle') }}</strong> 
<br>
</div>
</div>   

                <div class="form-group row @if($errors->has('about_text')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">about_text</label>
    <div class="col-sm-6">
    <textarea placeholder="about_text" class="form-control" name="about_text[{{$key}}]">{{$fullData5[$key]}}</textarea>
      <strong class="help-block">{{ $errors->first('about_text') }}</strong> 

    </div>
  </div>                                                                                                          
          
          @endforeach
          
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-primary center" type="submit" style="width: 150px;
    position: relative;
    left: -385%;
    ">Update Record</button>
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
