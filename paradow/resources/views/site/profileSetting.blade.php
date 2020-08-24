@extends('site/layout/main')


@section('content')
    
<style>

</style>
<div class="container">
<form class="searchBox" style="display: none;" method="get" action="{{url('/search')}}">
							{{csrf_field()}}
        <input type="text" name="search" placeholder="{{trans('main.searchNow')}}">
        <span id="cancel">
        <i class="fa fa-times"></i></span>
    </form>

  </div>
<div class="settingsPro">
<div class="container">
<br>
<br>
	<div class="row" id="main">
     
    <div class="col-md-12 well" id="rightPanel">
    <h4 class="ml-5">{{trans('main.updateData')}}</h4>
    <form id="jvalidate" role="form" class="form-horizontal mr-5 ml-5" method="post" novalidate="novalidate" action="{{ Route('users.update',$users->id) }}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <hr class="colorgraph">
            <input type="hidden" name="_method" value="PUT">
                   <div class="panel-body" >      
                   <div class="form-group row @if($errors->has('name')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.name')}}</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$users->name}}" placeholder="{{trans('main.name')}}" name="name">
      <strong class="help-block">{{ $errors->first('name') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('email')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.email')}}</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="inputPassword" value="{{$users->email}}" placeholder="{{trans('main.email')}}" name="email">
      <strong class="help-block">{{ $errors->first('email') }}</strong> 

    </div>
  </div>
         
  <div class="form-group row @if($errors->has('password')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.password')}}</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword" placeholder="{{trans('main.password')}}" name="password">
      <strong class="help-block">{{ $errors->first('password') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('repassword')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.repassword')}}</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword" placeholder="{{trans('main.repassword')}}" name="repassword">
      <strong class="help-block">{{ $errors->first('repassword') }}</strong> 

    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.role')}}</label>
    <div class="col-sm-6">
 
<div class="form-check">
  <input class="form-check-input" type="radio" name="role" id="exampleRadios1" value="0" checked>
  <label class="form-check-label" for="exampleRadios1">
  {{trans('main.user')}}
  </label>
</div>
</div></div>
  <div class="form-group row @if($errors->has('photo')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.profilePic')}}</label>
    <div class="col-sm-6">
      <input type="file" class="form-control" id="inputPassword" value="{{$users->photo}}" name="{{trans('main.profilePic')}}">
      <strong class="help-block">{{ $errors->first('photo') }}</strong> 

    </div>
    <img src="/images/{{$users->photo}}" style="    position: relative;
        top: -26px;height: 82px;">
  </div>
  <div class="form-group row @if($errors->has('phone')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.phone')}}</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$users->phone}}" placeholder="{{trans('main.phone')}}" name="phone">
      <strong class="help-block">{{ $errors->first('phone') }}</strong> 

    </div>
  </div>
  <div class="form-group row @if($errors->has('city')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.city')}}</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputPassword" value="{{$users->city}}" placeholder="{{trans('main.city')}}" name="city">
      <strong class="help-block">{{ $errors->first('city') }}</strong> 

    </div>
  </div>  

           <div class="form-group row @if($errors->has('creditNo')) has-error @endif">
    <label for="inputPassword" class="col-sm-2 col-form-label">{{trans('main.creditNo')}}</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" value="{{$users->creditNo}}" id="inputPassword" placeholder="{{trans('main.creditNo')}}" name="creditNo">
      <strong class="help-block">{{ $errors->first('creditNo') }}</strong> 

    </div>
  </div>  


                                                                                                                        
  <div class="btn-group">
         <button class="btn btn-primary ml-5" type="submit" style="width: 150px;">{{trans('main.updateData')}}</button>
   </div>                                                                                                                          
    </div>  
    <br>
    <hr class="colorgraph">
</form>
	</div>
    </div>
    </div>
    </div>
   @stop