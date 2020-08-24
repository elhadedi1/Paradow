@extends('site/layout/main')

@section('content')

<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel="stylesheet" href="{{asset('/public/website/css/seller.css')}}">
</head>
<body>


@foreach($aboutRes as $daa)
<section id="section1" class="demo"  style="background:url('/paradow/public/images/blank-business-composition-computer-373076.jpg');   background-size: cover; height:500px;
    background-repeat: no-repeat;">
    <div class="container">
<form class="searchBox" style="display: none;" method="get" action="{{url('/search')}}">
							{{csrf_field()}}
        <input type="text" name="search" placeholder="{{trans('main.searchNow')}}">
        <span id="cancel">
        <i class="fa fa-times"></i></span>
    </form>

  </div>
        <div class="offset-3 col-md-6">    @include('site.layout.includes.massage')       </div>

  <h1 style="font-size:8vw;">Work Your Way</h1>
 <p style="font-size:2vw;">You bring the skill. We'll make earning easy.</p>
  <a href="#page-content"><span></span></a>
</section>
@endforeach


<!-----How it Works ---->
<h2 class="h2 text-center">{{trans('main.howWork')}}</h2>
<div class="pset">
  <div class="container">
    <div class="row listar-feature-items">

      <div class="col-xs-12 col-sm-6 col-md-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
        <div class="listar-feature-item listar-feature-has-link">

          <a href="paradow/{{LaravelLocalization::getCurrentLocale()}}/signin" ></a>

          <div class="listar-feature-item-inner">

            <div class="listar-feature-right-border"></div>

            <div class="listar-feature-block-content-wrapper">
              <div class="listar-feature-icon-wrapper">
                <div class="listar-feature-icon-inner">
                  <div>
                  <a href="" class="listar-image-icon fas fa-user-plus mt-3" style="font-size:40px; margin-left:35px; color:#447c4d;"></a>
                  </div>
                </div>
              </div>

              <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                <div class="listar-feature-item-title listar-feature-counter-added">
                  <span><span>01</span>
                  {{trans('main.signUp')}}  </span>
                </div>

                <div class="listar-feature-item-excerpt">
                {{trans('main.signUpFromHere')}} </div>

              </div>
            </div>
          </div>
        </div>
        <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
        <div class="listar-feature-item listar-feature-has-link">

          <a href="https://www.vectorizer.io/"></a>

          <div class="listar-feature-item-inner">

            <div class="listar-feature-right-border"></div>

            <div class="listar-feature-block-content-wrapper">
              <div class="listar-feature-icon-wrapper">
                <div class="listar-feature-icon-inner">
                  <div>
                    <a href="" class="listar-image-icon fas fa-exchange-alt mt-3"  style="font-size:40px; color:#447c4d;margin-left:35px;"></a>
                  </div>
                </div>
              </div>

              <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                <div class="listar-feature-item-title listar-feature-counter-added">
                  <span><span>02</span>
                  {{trans('main.convert')}}  </span>
                </div>

                <div class="listar-feature-item-excerpt">
                {{trans('main.convertImgToSVG')}} </div>

              </div>
            </div>
          </div>
        </div>
        <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
        <div class="listar-feature-item listar-feature-has-link">

          <a href="/{{LaravelLocalization::getCurrentLocale()}}/seller/create" ></a>

          <div class="listar-feature-item-inner">

            <div class="listar-feature-right-border"></div>

            <div class="listar-feature-block-content-wrapper">
              <div class="listar-feature-icon-wrapper">
                <div class="listar-feature-icon-inner">
                  <div>
               
                  <a href="" class="listar-image-icon fas fa-upload"  style="font-size:40px; color:#447c4d; margin-left:35px;"></a>
               
                  </div>
                </div>
              </div>

              <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                <div class="listar-feature-item-title listar-feature-counter-added">
                  <span><span>03</span>
                  {{trans('main.uploadPhoto')}}  </span>
                </div>

                <div class="listar-feature-item-excerpt">
                {{trans('main.uploadAfterConv')}} </div>

              </div>
            </div>
          </div>
        </div>
        <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
      </div>
    </div>
    <div class="center">
  <div class="btn-1">
    <a href="/{{LaravelLocalization::getCurrentLocale()}}/sellerCreate"><span class="span">{{trans('main.getStart')}}</span></a>
  </div>

</div>
  </div>
</div>

  



  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
  </script><script>
    $(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
  </script>

</body>
</html>

@stop