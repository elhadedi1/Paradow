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
@include('admin.layout.includes.massage') 

<div class="loginPage">
                    @foreach ($errors->all() as $err)
                    
                    <div class="container">
                        <div class="offset-md-3 col-md-6">
                                    <div class="alert alert-danger" role="alert" style="font-size: 16px;">

                                <strong>Warning!</strong> {{ $err}}</div>
                                </div>
                            </div>

           @endforeach
<div class="container container_1" id="container">
	<div class="form-container sign-up-container">
		<form action="">
			<h2 class="title">PARADOW</h2>
			<p class="desc">pick your perfect <span>Draw</span></p>
			@foreach($aboutRes as $data)
				<img class="img1 img2" src="/paradow/public/images/{{$data->logo_header}}" alt="1357d638624297b" border="0">
				@endforeach
			<p class="account">{{trans('main.your account')}}</p>
			<button class="ghost In" id="signIn"> {{trans('main.sign in')}}</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
	<form method="post" action="/paradow/signin">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<h2 class="sign">{{trans('main.sign in')}}</h2>
			<!--<div class="social-container">-->
			<!--	<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>-->
			<!--	<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>-->
			<!--	<a href="#" class="social"><i class="fab fa-twitter"></i></a>-->
			<!--</div>-->
			<!--<span>{{trans('main.your account')}}</span>-->
    				
    						<input type="email" name="email" placeholder="{{trans('main.email')}}">
						<input type="password" name="password" placeholder="{{trans('main.password')}}">

						@if (Route::has('password.request'))
                    <a  href="{{ url('/reset') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                @endif
			<button type="submit">{{trans('main.sign in')}}</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
			
				
				<h2 style="margin-top: 49px;">{{trans('main.create')}}</h2>
				<form method="post" action="/paradow/signup" enctype="multipart/form-data" style="background:none">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

						<input type="text" name="name" placeholder="{{trans('main.name')}}">
						<input type="email" name="email" placeholder="{{trans('main.email')}}">
						<input type="password" name="password" placeholder="{{trans('main.password')}}">
                      
						<input type="password" name="repassword" placeholder="{{trans('main.repassword')}}">
                     
                  
         			<br>
				<button class="login" id="signIn">{{trans('main.register')}}</button>
</form>
			</div>
			<div class="overlay-panel overlay-right">
				<h2 class="title2">PARADOW</h2>
				<p class="desc"> pick your perfect <span>Draw</span></p>
				@foreach($aboutRes as $data)
				<img class="img1" src="/paradow/public/images/{{$data->logo_header}}">
				@endforeach
				<p class="account">{{trans('main.dont have acc')}}</p>
				<button class="ghost" id="signUp" type="submit">{{trans('main.signup')}}</button>
			</div>
		</div>
	</div>
</div>
</div>


@stop