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
              
                <div class="page-content-wrap" style="float:left">          
                    <div class="row" style="margin-right:0px">
                        <div class="col-md-10" style="margin:50px;">                        
                        <h4> Update Data</h4>
              <br>
                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <form  id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/about/'.$about->id)}}" method="post" novalidate="novalidate">
                                <input type="hidden" name="_method" value="PUT">

                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                             <div class="panel-body">    

   <div class="form-group row @if($errors->has('logo_header')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">logo_header</label>
    <div class="col-sm-6">
      <input type="file" class="form-control"  name="logo_header" value="{{$about->logo_header}}">
      <strong class="help-block">{{ $errors->first('logo_header') }}</strong> 

    </div>
    <img src="/images/{{$about->logo_header}}" style="    position: relative;
        top: -26px;height: 82px;">
  </div>
  <div class="form-group row @if($errors->has('logo_footer')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">logo_footer</label>
    <div class="col-sm-6">
      <input type="file" class="form-control"  name="logo_footer">
      <strong class="help-block">{{ $errors->first('logo_footer') }}</strong> 

    </div>
    <img src="/images/{{$about->logo_footer}}" style="    position: relative;
        top: -26px;height: 82px;">
  </div>
   
  <div class="form-group row @if($errors->has('email')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="inputPassword" value="{{$about->email}}" placeholder="email" name="email">
      <strong class="help-block">{{ $errors->first('email') }}</strong> 

    </div>
  </div>

  @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)                                      
  <div class="form-group row @if($errors->has('address')) has-error @endif">
  <label for="inputEmail3" class="col-sm-2 col-form-label">address</label>
<div class="col-sm-6">

<input type="text" class="form-control" name="address[{{$key}}]" placeholder="" value="{{$fullData1[$key]}}">
<strong class="help-block">{{ $errors->first('address') }}</strong> 
<br>
</div>
</div>
<div class="form-group row @if($errors->has('phone')) has-error @endif">
    <label for="description" class="col-sm-2 col-form-label">phone</label>
    <div class="col-sm-6">

      <textarea type="text" class="form-control" id="phone" name="phone[{{$key}}]" placeholder="" row="4">{{$fullData2[$key]}}</textarea>
      <strong class="help-block">{{ $errors->first('phone') }}</strong> 
      <br>

    </div>
  </div>
  <div class="form-group row @if($errors->has('about_footer')) has-error @endif">
    <label for="description" class="col-sm-2 col-form-label">about_footer</label>
    <div class="col-sm-6">

      <textarea type="text" class="form-control" id="about_footer" name="about_footer[{{$key}}]" placeholder="" row="4">{{$fullData3[$key]}}</textarea>
      <strong class="help-block">{{ $errors->first('about_footer') }}</strong> 
      <br>

    </div>
  </div>
  <hr>
  @endforeach      


  <div class="form-group row @if($errors->has('sldier')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">Slider photo</label>
    <div class="col-sm-6">
      <input type="file"  class="form-control" id="inputPassword" name="sldier">
      <strong class="help-block">{{ $errors->first('sldier') }}</strong> 

    </div>
    <img src="/images/{{$about->sldier}}" style="    position: relative;
        top: -26px;height: 82px;">
  </div>
  <div class="form-group row @if($errors->has('facebook_link')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">facebook_link</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$about->facebook_link}}" placeholder="facebook_link" name="facebook_link">
      <strong class="help-block">{{ $errors->first('facebook_link') }}</strong> 

    </div>
  </div>  
  <div class="form-group row @if($errors->has('youtube_link')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">youtube_link</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$about->youtube_link}}" placeholder="youtube_link" name="youtube_link">
      <strong class="help-block">{{ $errors->first('youtube_link') }}</strong> 

    </div>
  </div>  
  <div class="form-group row @if($errors->has('github_link')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">github_link</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$about->github_link}}" placeholder="github_link" name="github_link">
      <strong class="help-block">{{ $errors->first('github_link') }}</strong> 

    </div>
  </div>  
                                                                                  
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
