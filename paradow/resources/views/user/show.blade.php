@extends('site/layout/main')
@section('content')

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: 44px auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

    @media screen and (min-width: 320px) and (max-width: 480px){
        .nav-tabs {
    width: 122% !important;
    margin-left: -10%;
}

.myTab1 .nav-item {
    width: 80%;
    text-align: center;
    margin: 0px 1% !important;
}

.myTab1 .nav-link {
    font-size: 13px;
    padding: 10px 0px;
}
}

 @media screen and (min-width: 481px) and (max-width: 767px){
        .nav-tabs {
    width: 122% !important;
    margin-left: -10%;
}

.myTab1 .nav-item {
    width: 80%;
    text-align: center;
    margin: 0px 1% !important;
}

.myTab1 .nav-link {
    font-size: 13px;
    padding: 10px 0px;
}
}


 @media screen and (min-width: 768px) and (max-width: 990px){
        .nav-tabs {
    width: 122% !important;
    margin-left: -10%;
}

.myTab1 .nav-item {
    width: 80%;
    text-align: center;
    margin: 0px 1% !important;
}

.myTab1 .nav-link {
    font-size: 13px;
    padding: 10px 0px;
}
}
.myTab1 li
{
margin-bottom:0px !important;
}
</style>
<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-8 col-md-3">
            <br>
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">{{ $user->name }}</h3>
              </div>
              <div class="card-body">
                  <img class="rounded img-fluid" src="/images/{{$user->photo}}" alt="profile pic">
              </div>
          </div>
          @include('user_follow.follow_button', ['user' => $user]) 
    
        </div>


        <div class="col-xs-12 col-sm-8 col-md-8">
            <br>
            <ul class="nav nav-tabs nav-justified mb-3 myTab1"  id="myTab" role="tablist">
              <li class="nav-item col-xs-4 col-sm-4 col-md-4 col-lg-4 mt-3"><a href="{{ route('user.show', ['id' => $user->id]) }}" class="nav-link {{ Request::is('user/' . $user->id) ? 'active' : '' }}">TimeLine <span class="badge badge-secondary">{{$count_categories}}</span></a></li>
              <li class="nav-item col-xs-4 col-sm-4 col-md-4 col-lg-4 mt-3"><a href="{{ route('user.followings', ['id' => $user->id]) }}" class="nav-link {{ Request::is('user/*/followings') ? 'active' : '' }}">Followings <span class="badge badge-secondary">{{ $count_followings }}</span></a></li>
              <li class="nav-item col-xs-4 col-sm-4 col-md-4 col-lg-4 mt-3"><a href="{{ route('user.followers', ['id' => $user->id]) }}" class="nav-link {{ Request::is('user/*/followers') ? 'active' : '' }}">Followers <span class="badge badge-secondary">{{ $count_followers }}</span></a></li>
            </ul> 

              <!-- <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-sm-8 col-md-8">

                  </div>
                </div>
              </div> -->
             <br><br><br>
              @foreach($catt as $data)
              @if($user->id ==  $data->user_id )
              @php
              $img=explode(",",$data->image);
              @endphp

              <div class="card">
                <img src="/images/{{$img[0]}}" alt="Denim Jeans" style="width:100%">
                <a href="/category/{{$data->id}}"> <button>View Post</button></a>
              </div>
             
              @endif
              @endforeach

           
        </div>


    </div>
    <br><br>

</div>





@endsection 