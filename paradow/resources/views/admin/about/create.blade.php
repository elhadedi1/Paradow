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
                                    <li><a href="/admin">Dashboard</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li class="active">Add </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
                <div class="page-content-wrap" style="display: inline list-item;">          
                <div class="row" style="margin-right:0px">
                        <div class="col-md-10" style="margin:50px;">                        
                        <h4> Add New Data</h4>
              <br>
                        
                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/about')}}"  method="post" novalidate="novalidate">
                                    
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="panel-body">      
   <div class="form-group row @if($errors->has('logo_header')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">logo_header</label>
    <div class="col-sm-6">
      <input type="file" class="form-control"  name="logo_header">
      <strong class="help-block">{{ $errors->first('logo_header') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('logo_footer')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">logo_footer</label>
    <div class="col-sm-6">
      <input type="file" class="form-control"  name="logo_footer">
      <strong class="help-block">{{ $errors->first('logo_footer') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('email')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="inputPassword" placeholder="email" name="email"/>
      <strong class="help-block">{{ $errors->first('email') }}</strong> 

    </div>
  </div>

  @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)                                      

<div class="form-group row @if($errors->has('address')) has-error @endif">
  <label for="inputPassword" class="col-sm-2 col-form-label">address</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" id="inputPassword" placeholder="{{$value['name']}}" name="address[{{$key}}]">
      <strong class="help-block">{{ $errors->first('address') }}</strong> 

    </div>
  </div>
                
  <div class="form-group row @if($errors->has('phone')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">phone</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" placeholder="{{$value['name']}}" name="phone[{{$key}}]">
      <strong class="help-block">{{ $errors->first('phone') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('about_footer')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">about_footer</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" placeholder="{{$value['name']}}" name="about_footer[{{$key}}]">
      <strong class="help-block">{{ $errors->first('about_footer') }}</strong> 

    </div>
  </div> 
  <hr>
@endforeach
  <div class="form-group row @if($errors->has('sldier')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">sldier</label>
    <div class="col-sm-6">
      <input type="file"  class="form-control" id="inputPassword" name="sldier">
      <strong class="help-block">{{ $errors->first('sldier') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('facebook_link')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">facebook_link</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" placeholder="facebook_link" name="facebook_link">
      <strong class="help-block">{{ $errors->first('facebook_link') }}</strong> 

    </div>
  </div>  
  <div class="form-group row @if($errors->has('youtube_link')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">youtube_link</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" placeholder="youtube_link" name="youtube_link">
      <strong class="help-block">{{ $errors->first('youtube_link') }}</strong> 

    </div>
  </div>  
  <div class="form-group row @if($errors->has('github_link')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">github_link</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" placeholder="github_link" name="github_link">
      <strong class="help-block">{{ $errors->first('github_link') }}</strong> 

    </div>
  </div>  
              


                                        <div class="btn-group pull-right">
 <button class="btn btn-primary center" type="submit" style="width: 110px;
    position: relative;
    left: -485%;
    ">Upload data</button>
                                        </div>  

                                       </div>                                    
                                    </form>
</div></div><br><br>
                                    <hr>
                                <h3>Data in About Page</h3>  

                                <div class="form-group">
                                <form action="{{url('admin/aboutTitle')}}" method="post" > 
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)                                      

    <label for="mainTitle" class="col-sm-2 col-form-label">Main Title:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control txt_to_add" id="mainTitle" placeholder="{{$value['name']}}" name="mainTitle[{{$key}}]">

    </div>
    @endforeach
  </div>  
  <button class="btn btn-primary btn_to_add" name="add">Click to add </button>
  </form>
  <br>
  <br>
                                    <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/abouts')}}"  method="post" novalidate="novalidate">
                                    
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                             <div class="form-group row @if($errors->has('about_title')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">about_title</label>
                             <div class="col-md-6" id="selectContainer">
                             
                               <select class="form-control" id="select" name="about_title">
                                  
                               @foreach($mainTitle as $data)
                                    <option value="{{$data->mainTitle}}">{{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}</option>

                                    @endforeach
                                </select>
                                <strong class="help-block">{{ $errors->first('about_title') }}</strong> 
              </div>
  </div> 
  @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)                                      

                <div class="form-group row @if($errors->has('about_subtitle')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">about_subtitle</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" placeholder="{{$value['name']}}" name="about_subtitle[{{$key}}]">
      <strong class="help-block">{{ $errors->first('about_subtitle') }}</strong> 

    </div>
  </div>  

                <div class="form-group row @if($errors->has('about_text')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">about_text</label>
    <div class="col-sm-6">
    <textarea placeholder="about_text" class="form-control"  name="about_text[{{$key}}]">{{$value['name']}}</textarea>
      <strong class="help-block">{{ $errors->first('about_text') }}</strong> 

    </div>
  </div>  
                @endforeach                                                                                  
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-primary center" type="submit" style="width: 100px;
    position: relative;
    left: -485%;
    ">Add Data</button>
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

