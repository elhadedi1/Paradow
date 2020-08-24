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
<div class="containereee" style="padding:40px;">

<div class="side_wrapper">
  <section class="about-dev">
    <header class="profile-card_header">
      <div class="profile-card_header-container">
        <div class="profile-card_header-imgbox">
          <img src='/images/{{Auth::User()->photo}}' alt="Mewy Pawpins" />
        </div>
        <h1>{{Auth::User()->name}}<span>{{Auth::User()->email}}</span></h1>
      </div>
    </header>
    <div class="profile-card_about">
      <h2>{{trans('main.allAboutMe')}}:</h2>
      <br><br>
      <p><b>{{trans('main.name')}}:  </b>{{Auth::user()->name}}</p> 
      <p><b>{{trans('main.phone')}} : </b>{{Auth::user()->phone}}</p> 
      <p><b>{{trans('main.city')}} :  </b>{{Auth::user()->city}}</p> 
      <p><b>{{trans('main.creditNo')}} :  </b>{{Auth::user()->creditNo}}</p> 
      <p><b>{{trans('main.createdAtImg')}}:  </b>{{Auth::user()->created_at}}</p> 
              
      <footer class="profile-card_footer">
    
        <p><a class="back-to-profile" href="/profileSetting">{{trans('main.editProfile')}}:</a></p>
      </footer>
    </div>
  </section>
</div>
</div>


@stop