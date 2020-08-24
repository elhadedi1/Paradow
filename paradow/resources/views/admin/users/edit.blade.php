@extends('admin/layout/main')

@section('content')
    
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Basic table</li>
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
                        <h4> Update {{ $user->name }} data</h4>
              <br>
                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/users/'.$user->id)}}" method="post" novalidate="novalidate">
                                <input type="hidden" name="_method" value="PUT">

                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="panel-body" >      
                                    <div class="form-group row @if($errors->has('name')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$user->name}}" placeholder="name" name="name">
      <strong class="help-block">{{ $errors->first('name') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('email')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="inputPassword" value="{{$user->email}}" placeholder="email" name="email">
      <strong class="help-block">{{ $errors->first('email') }}</strong> 

    </div>
  </div>
         
  <div class="form-group row @if($errors->has('password')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
      <strong class="help-block">{{ $errors->first('password') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('repassword')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">rePassword</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword" placeholder="rePassword" name="repassword">
      <strong class="help-block">{{ $errors->first('repassword') }}</strong> 

    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
    <div class="col-sm-6">
  <div class="form-check">
  <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Admin
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="0" checked>
  <label class="form-check-label" for="exampleRadios1">
    User
  </label>
</div>
</div></div>
  <div class="form-group row @if($errors->has('photo')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">ProfilePicture</label>
    <div class="col-sm-6">
      <input type="file" class="form-control" id="inputPassword" value="{{$user->photo}}" name="photo">
      <strong class="help-block">{{ $errors->first('photo') }}</strong> 

    </div>
    <img src="/images/{{$user->photo}}" style="    position: relative;
        top: -26px;height: 82px;">
  </div>
  <div class="form-group row @if($errors->has('phone')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$user->phone}}" placeholder="phone" name="phone">
      <strong class="help-block">{{ $errors->first('phone') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('city')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">city</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$user->city}}" placeholder="city" name="city">
      <strong class="help-block">{{ $errors->first('city') }}</strong> 

    </div>
  </div>  

           <div class="form-group row @if($errors->has('creditNo')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">creditNo</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" value="{{$user->creditNo}}" id="inputPassword" placeholder="creditNo" name="creditNo">
      <strong class="help-block">{{ $errors->first('creditNo') }}</strong> 

    </div>
  </div>  

              
                                                                                                                        
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-primary center" type="submit" style="width: 150px;
    position: relative;
    left: -385%;
    ">Update data</button>
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
