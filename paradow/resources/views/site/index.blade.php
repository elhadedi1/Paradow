@extends('site/layout/main')
@section('content')
<style>
.center_ {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 24px;
}

.btn_1{
  width: 300px;
  height: 200px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #000 !important;
  flex-direction: column;
}

.span_ {
  position: relative;
  z-index: 3;
}


.btn_1 a {
  text-decoration: none;
  border: 2px solid #488851;
  padding: 15px;
  color: #488851;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: relative;
  display: inline-block;
}


.btn_1 a::before {
  content: "";
  /* position: absolute;
  top: 5px;
  left: -2px; */
  width: calc(100% + 6px);
  height: calc(100% - 10px);
  background-color: #ffffff;
  transition: all 0.5s ease-in-out;
  transform: scaleY(1);
}

.btn_1 a:hover::before{
  transform: scaleY(0);
}

.btn_1 a::after {
  content: "";
  position: absolute;
  left: 5px;
  top: -5px;
  width: calc(100% - 10px);
  height: calc(100% + 10px);
  background-color: #ffffff;
  transition: all 0.5s ease-in-out;
  transform: scaleX(1);
}

.btn_1 a:hover::after {
  transform: scaleX(0);
}
</style>


@foreach($aboutRes as $daa)

<div class="slider" style="background:url('/images/{{ $daa->sldier }}');   background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%">
            <div class="col-md-6">    @include('site.layout.includes.massage')       </div>

<div class="container">
<form class="searchBox" style="display: none;" method="get" action="{{url('/search')}}">
							{{csrf_field()}}
        <input type="text" name="search" placeholder="{{trans('main.searchNow')}}">
        <span id="cancel">
        <i class="fa fa-times"></i></span>
    </form>

  </div>
</div>
@endforeach
<!-- 
{{trans('main.logo')}}

@foreach($data as $d)
{{unserialize($d->text_en)[LaravelLocalization::getCurrentLocale()]}}
@endforeach --> 
<!-- start feature -->
<div class="features">
  <h2 class="h2 text-center">{{trans('main.titleFeature')}}</h2>
  <div class="container">
    <div class="row">
    @foreach($feature as $data)
      <div class="col-xs-12 col-sm-6 col-md-3">
        <img src="/images/{{$data->image}}" alt="">
        <p class="text-center">{{unserialize($data->description)[LaravelLocalization::getCurrentLocale()]}}</p>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- end feature -->
<!-- start recent added photo  -->
<div class="photos" style="overflow-x: hidden;">
  <h2 class="h2 text-center">{{trans('main.titleRecent')}}</h2>
<div class="bgColor-photos">
  <div class="container">
    <div class="row">
    <?php $i=0; ?>
    @foreach($resentPhoto as $data2)
    @if($i==0)
    <div class="col-xs-3 col-sm-3 wow slideInLeft" data-wow-duration="2s" >
    @endif
    @if($i==3)
    <div class="col-xs-3 col-sm-3 wow slideInRight" data-wow-duration="2s" >
    @endif
    @if($i==1 || $i==2)
    <div class="col-xs-3 col-sm-3"  >
    @endif
        <a href="{{LaravelLocalization::getCurrentLocale()}}/category/{{$data2->id}}"><img src="/images/{{$data2->imageOnWall}}" class="img{{$i++}}" alt="{{$data2->title}}"></a>
      </div>
      @endforeach
    </div></div>
</div>
</div>
<hr>
<!-- end resent added photo -->
<!-- start offer -->
<div class="offer" style="height: 100%; width: 100%; ">
  <h2 class="h2 text-center">{{trans('main.titleOffer')}}</h2>
  <div class="container">
    
 
    <div class="row" >
      <div class="col-xs-5 col-sm-12 col-md-12 col-lg-2 mt-2" >
        <div class="txt1">
          <h5>{{unserialize($offer[0]->title)[LaravelLocalization::getCurrentLocale()]}}</h5><hr>
          <h2><span class="badge badge-secondary">New</span></h2>
          <p style="font-size: 14px; margin-bottom: 58px">{{unserialize($offer[0]->description)[LaravelLocalization::getCurrentLocale()]}}  </p>
          <a href="{{LaravelLocalization::getCurrentLocale()}}/{{$offer[0]->id}}/offer"><i class="fa fa-arrow-alt-circle-right"></i></a>
        </div>        
      </div>
    
      
      <div class="col-xs-5 col-sm-6 col-md-6 col-lg-5 mt-2" style="height:250px; ">
        <img src="/images/{{$resentPhoto[0]->imageOnWall}}" style="width: 100%; height: 100%;" alt="company Dog Image"/>
      </div>
   
      <div class="col-xs-5 col-sm-6 col-md-6 col-lg-5 mt-2" style="height:250px;">
        <img src="/images/{{$resentPhoto[1]->imageOnWall}}" style="width: 100%; height: 100%;" alt="cafe Coffee Image"/>
      </div>

  
  
      <div class="col-xs-5 col-sm-6 col-md-6 col-lg-4 mt-2" style="height:250px;float:left" >
        <img src="/images/{{$resentPhoto[2]->imageOnWall}}"style="width: 100%; height: 100%;" alt="home Girl2 Image"/>
      </div>
  
      <div class="col-xs-5 col-sm-6 col-md-6 col-lg-4 mt-2" style="height:250px;float:left ">
        <img src="/images/{{$resentPhoto[3]->imageOnWall}}"style="width: 100%; height: 100%;" alt="company Image"/>
      </div>
   
      <div class="col-xs-5 col-sm-12 col-md-6 col-lg-2 mt-2" style="right:0">
        <div class="txt2">
          <h5>{{unserialize($offer[1]->title)[LaravelLocalization::getCurrentLocale()]}}</h5><hr>
          <p style="font-size: 14px; margin-bottom: 58px">{{unserialize($offer[1]->description)[LaravelLocalization::getCurrentLocale()]}}  </p>
          <a href="{{LaravelLocalization::getCurrentLocale()}}/{{$offer[1]->id}}/offer"><i class="fa fa-arrow-alt-circle-right"></i></a>
        </div>      </div>
  
      <div class="col-xs-5 col-sm-12 col-md-6 col-lg-2 mt-2" style="float:right" >
        <div class="txt3">
          <h5>{{unserialize($offer[2]->title)[LaravelLocalization::getCurrentLocale()]}}</h5><hr>
          <p style="font-size: 14px; margin-bottom: 58px">{{unserialize($offer[2]->description)[LaravelLocalization::getCurrentLocale()]}} </p>
          <a href="{{LaravelLocalization::getCurrentLocale()}}/{{$offer[2]->id}}/offer"><i class="fa fa-arrow-alt-circle-right"></i></a>
        </div>
            </div>
 
    </div>
  
  </div>

</div>
<!-- end offer -->

<!-- Start Carsoul -->
<div class="features">
  <h2 class="h2 text-center">{{trans('main.mostLiked')}}</h2>
  <div class="container-fluid">
      <div id="owl-demo" class="owl-carousel owl-theme">
      @foreach($mostLiked as $photoLike)
      @php $img=explode(",",$photoLike->image); @endphp
              <div class="item cards text-center">
                  <a href="{{LaravelLocalization::getCurrentLocale()}}/category/{{$photoLike->id}}"width="100%"> 
                  <img src="/images/{{ $img[0]}}" width="100%" alt="{{$photoLike->title}}">
                  </a>
            </div>
    @endforeach  
     
  </div>
    </div>
</div>
<!-- ENd Carsoul -->

<hr>
<!----start stories--->

<div class="discover">
  <h2 class="h2 text-center">{{trans('main.discoverStory')}}</h2>
 <br>
<section class="container">
  <div class="row active-with-click">
      <div class="col-md-4 col-sm-6 col-xs-12">
      
          <article class="material-card Teal">
         
              <h2>
                  <span>{{$story[0]->name}}</span>
                  <strong>
                      <i class="fas fa-clock"></i>
                      {{$story[0]->created_at}}
                  </strong>
              </h2>
              <div class="mc-content">
                  <div class="img-container">
                  @php $img=explode(",",$data->image); @endphp
                      <img class="img-responsive" style="width:100%" src="/images/{{$story[0]->image}}" alt="resturant Flavor Image">
                  </div>
                  <div class="mc-description">
                  {{$story[0]->story}}
                  </div>
              </div>
              <a class="mc-btn-action">
                  <i class="fa fa-bars"></i>
              </a>
              <div class="mc-footer">
                  <h4>
                      Social
                  </h4>
                  <a class="fab fa-fw fa-facebook-f"  style="background: #009688; color: white; font-size: 44px; padding: 3px;"></a>
                  <a class="fab fa-fw fa-twitter"  style="background: #009688; color: white; font-size: 44px; padding: 3px;"></a>
                  <a class="fab fa-fw fa-google-plus-g"  style="background: #009688; color: white; font-size: 44px; padding: 3px;"></a>
              </div>
             
          </article>
       
      </div>
  
      <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Amber">
              <h2>
                  <span>{{$story[1]->name}}</span>
                  <strong>
                      <i class="fas fa-clock"></i>
                      {{$story[1]->created_at}}
                  </strong>
              </h2>
              <div class="mc-content">
                  <div class="img-container">
                  @php $img=explode(",",$data->image); @endphp
                      <img class="img-responsive" style="width:100%" src="/images/{{$story[1]->image}}" alt="comapny Map Image">
                  </div>
                  <div class="mc-description">
                  {{$story[1]->story}}
                  </div>
              </div>
              <a class="mc-btn-action">
                  <i class="fa fa-bars"></i>
              </a>
              <div class="mc-footer">
                  <h4>
                      Social
                  </h4>
                  <a class="fab fa-fw fa-facebook-f"></a>
                  <a class="fab fa-fw fa-twitter"></a>
                  <a class="fab fa-fw fa-google-plus-g" style="background: #ff6f00; color: white; font-size: 44px; padding: 3px;"></a>
              </div>
          </article>
      </div>
  
      <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Blue-Grey">
                  <h2>
                  <span>{{$story[2]->name}}</span>
                  <strong>
                      <i class="fas fa-clock"></i>
                      {{$story[2]->created_at}}
                  </strong>
              </h2>
              <div class="mc-content">
                  <div class="img-container">
                  @php $img=explode(",",$data->image); @endphp
                      <img class="img-responsive" style="width:100%" src="/images/{{$story[2]->image}}" alt="home Art Image">
                  </div>
                  <div class="mc-description">
                  {{$story[2]->story}}
                  </div>
              </div>
              <a class="mc-btn-action">
                  <i class="fa fa-bars"></i>
              </a>
              <div class="mc-footer">
                  <h4>
                      Social
                  </h4>
                  <a class="fab fa-fw fa-facebook-f"  style="background: #607D8B; color: white; font-size: 44px; padding: 3px;"></a>
                  <a class="fab fa-fw fa-twitter"  style="background: #607D8B; color: white; font-size: 44px; padding: 3px;"></a>
                  <a class="fab fa-fw fa-google-plus-g"  style="background: #607D8B; color: white; font-size: 44px; padding: 3px;"></a>
              </div>
          </article>
      </div>
  </div>
</section>

</div>

<div class="center_">
  <div class="btn_1">
    <a href="{{LaravelLocalization::getCurrentLocale()}}/storyCreate"><span class="span_">{{trans('main.writeStory')}}</span></a>
  </div>

</div>
<!----end stories--->
<!-- start data -->

<main class="main-page">
  <section class="cards2">
  @php
      $i=1;
      @endphp
  @foreach($mostViewed as $photoView)
      @php
                $img=explode(",",$photoView->imageOnWall);
                @endphp
                @if($photoView->views > 0)
                <div class="card2">

      <div class="card2__img-box"><a href="{{LaravelLocalization::getCurrentLocale()}}/category/{{$photoView->id}}"> <img src="/images/{{ $img[0]}}" width="100%" height="100%" alt="{{$photoView->title}}"></a>
</div>
      <div class="card2__content">
        <h2 class="card2__title">{{unserialize($photoView->title)[LaravelLocalization::getCurrentLocale()]}}</h2>
        <p class="card2__text">{{unserialize($photoView->description)[LaravelLocalization::getCurrentLocale()]}}
        </p>
                          @if($photoView->price !=$photoView->priceAfterOff && $photoView->priceAfterOff==0)
       <p class="card2__text txtMore{{$i}}" style="display:none;">{{trans('main.finalPrice')}}: {{$photoView->price}} 
      </p>@endif

                   @if($photoView->price !=$photoView->priceAfterOff && $photoView->priceAfterOff!=0 )
       <p class="card2__text txtMore{{$i}}" style="display:none;">{{trans('main.finalPrice')}}: {{$photoView->priceAfterOff}} 
     <del>{{$photoView->price}}</del> </p>  @endif
       @if($photoView->price ==0 )
       <p class="card2__text txtMore{{$i}}" style="display:none;">{{trans('main.finalPrice')}}: {{$photoView->price}}</p> 
                   @endif

        <a class="card2__link btnMore{{$i}}">{{trans('main.readMore')}}</a>
          <a class="card2__link txtLess{{$i}}" style="display:none;">{{trans('main.readLess')}}</a>

      </div>
      </div>
      @php
      $i++;
      @endphp
      @endif
      @endforeach
 
  </section>
</main>
<!-- end data -->




@stop