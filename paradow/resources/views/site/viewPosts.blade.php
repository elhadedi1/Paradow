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
<br><br><br>
<h2 class="h2 text-center">{{trans('main.myWork')}}</h2>

<br><br>
@foreach($cat as $data)
@if(Auth::user()->id==$data->user_id)
<div class="blog-card">
    <div class="meta">
    @php
     $img=explode(",",$data->image);
    @endphp
      <div class="photo" style="background-image: url('/images/{{ $img[0]}}')"></div>
      <ul class="details">
        <li class="author"><a href="#">{{$data->get_username()}}</a></li>
        <li class="date">{{$data->created_at}}</li>
      
      </ul>
    </div>
    <div class="description">
      <h1>{{$data->categoryName}}</h1>
      <h2> {{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</h2>
      <p><b>{{trans('main.descriptionImg')}} : </b>  {{unserialize($data->description)[LaravelLocalization::getCurrentLocale()]}}</p>
      <p><b>{{trans('main.priceImg')}} : </b> {{$data->price}}$</p>
      <h5><b>{{trans('main.noViews')}} : </b> {{$data->views}}</h5>
      <p class="read-more">
        <a href="category/{{$data->id}}">View Post</a>
      </p>
    </div>
  </div>
  @endif
@endforeach

@stop
