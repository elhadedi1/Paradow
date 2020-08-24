<!DOCTYPE html>
<html lang="en">

<head>
    <title>PARADOW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Augmented Reality Multi colors Robot">
    <meta name="keywords" content="Robot can Draw, Agumented Reality ">
    <meta name="robots" content="index,follow">
    <link rel="icon" href="/paradow/public/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="{{asset('/public/website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/website/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/website')}}/css/style-{{LaravelLocalization::getCurrentLocale()}}.css">
    <link rel="stylesheet" href="{{asset('/public/website/css/animate.css')}}">
    <link href="{{asset('/public/fonts/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/public/website/css/fileinput.min.css')}}" rel="stylesheet">
    <link href="{{asset('/public/website/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/public/website/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/website/css/responsive.css')}}">
    <style>

    </style>
     <script>

</script>
</head>

<body>
   <div class="speed">

  </div>
  <div class="spin" style="background-image:url('/images/spin.gif')">
    
  </div>
  <div class="mainn"> 
     <!-- vertical breadcrumb -->
 <nav aria-label="breadcrumb" class="vertical-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="homePageCrum" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/category"><i class="fa fa-images"></i></a></li>
     @if(Auth::check())
             @if(isset(Auth::user()->email))

    <li class="breadcrumb-item"><a href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/profileSetting"><i class="fa fa-user"></i></a></li>
  
    @endif @endif
    @if(!Auth::check())
     <li class="breadcrumb-item"><a href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/signup"><i class="fa fa-user"></i></a></li>
  
    @endif
      <li class="breadcrumb-item"><a href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/becomeSeller"><i class="fa fa-upload"></i></a></li>
    <li class="breadcrumb-item"><a href="#" id="search2"><i class="fa fa-search"></i></a></li>

  </ol>
</nav>   
<!-- End vertical -->
    <div class="btn-top">
      <i class="fas fa-arrow-up"></i>
            </div>
<div class="header">
  <div class="naV">
  <div class="container">
    <ul class="nav">
    @foreach($aboutRes as $pageRes)

      <li class="nav-item">
        <a class="nav-link" target="_blank" href="{{$pageRes->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="{{$pageRes->youtube_link}}"><i class="fab fa-youtube"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="{{$pageRes->github_link}}"><i class="fab fa-github"></i></a>
      </li>
  
      <li class="nav-item ml-auto">
                    <a class="nav-link" href="mailto:{{$pageRes->email}}">{{$pageRes->email}}</a> 

      </li>
      <li class="nav-item">
          <a class="nav-link" href="tel:{{unserialize($pageRes->phone)[LaravelLocalization::getCurrentLocale()]}}">{{unserialize($pageRes->phone)[LaravelLocalization::getCurrentLocale()]}}</a>
        </li>
      @endforeach
        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{trans('main.lang')}}</a>
    <div class="dropdown-menu">
      @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
        <a class="dropdown-item" href="{{LaravelLocalization::getLocalizedUrl($key)}}">{{$value['native']}}</a>
      @endforeach
    </div>
  </li>


    </ul>
  </div>
  </div>
</div>



    <!-- Strat navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navv">
        
      <div class="container">
          <div class="logo">
          @foreach($aboutRes as $daa)
            <a href="/paradow/{{LaravelLocalization::getCurrentLocale()}}"><img src="/paradow/public/images/{{$daa->logo_header}}" alt="logo image"></a>
            @endforeach
          </div>
          <div class="name">
            paradow</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item nav-items">
              <a class="nav-link styleLink homePageCrum" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}" data-scroll="home">{{trans('main.home')}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-items">
        <a class="nav-link styleLink" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/category">{{trans('main.gallery')}}</a>
            </li>
            <li class="nav-item nav-items">
              <a class="nav-link" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/buy">{{trans('main.order')}}</a>
            </li>
            <li class="nav-item nav-items">
        <a class="nav-link" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/becomeSeller">{{trans('main.createProject')}}</a>
            </li>
            <li class="nav-item nav-items">
        <a class="nav-link" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/about">{{trans('main.about')}}</a>
            </li>
        
            <li class="nav-item nav-items">
              <a class="nav-link" href="#" id="search"><i class="fa fa-search"></i></a>
            </li>
           
            @if(Auth::check())
             @if(isset(Auth::user()->email))

             <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="position: relative;top: -4px;" href="#"><img src="/paradow/public/images/{{Auth::user()->photo}}" style="height: 33px;" alt="{{auth::user()->name}} Photo" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
    <div class="dropdown-menu">
              <a class="nav-link" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/profilee"><span class="fa fa-user"></span> {{trans('main.myProfile')}}</a>
              <a class="nav-link" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/cart" id="cart"><i class="fas fa-cart-plus"></i> {{trans('main.myCart')}}</a>
                   <a class="nav-link" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/order" id="cart"><i class="fas fa-shopping-basket"></i> {{trans('main.myOrder')}}</a>
              <a class="nav-link" href="/paradow/logoutt"><span class="fas fa-sign-out-alt"></span> {{trans('main.logout')}}</a>
    </div>
  </li>
            
          
                @endif
            @endif         
          
            @if(!(Auth::check()))
            <li class="nav-item nav-items liBtn">
              <a class="nav-link" href="/paradow/{{LaravelLocalization::getCurrentLocale()}}/signup"><button class="btn btn-light headbtn">{{trans('main.registerNow')}}</button></a>
            </li>
             @endif



                    <!-- MESSAGES -->

                    @if(Auth::check())
             @if(isset(Auth::user()->email))

             <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle dropNotify" data-toggle="dropdown" href="#">    <i class="fa fa-bell" aria-hidden="true" style="font-size:19px;color: #f70e0e;"></i>
</a>  @php $count =0;@endphp
                        @foreach(Auth::user()->unreadnotifications as $note)  
                        
                       @php $count++; @endphp
                        @endforeach                        <div class="informer informer-danger" style="margin-top: -45px;
    margin-left: 19px; ">{{$count}}</div>

    <div class="dropdown-menu" style="padding: 10px;
    left: -175px !important;">
                            @foreach(Auth::user()->unreadnotifications as $note)    
@if($note->type== 'App\Notifications\msgNotify')
        <a href="/{{LaravelLocalization::getCurrentLocale()}}/category/{{$note->data['id']}}" style="color: #1c5013"><p>Your post has been approved from Admin</p></a>

        <a href="/notifications/{{$note->id}}"><i class="fa fa-eye" style="    font-size: 16px;
    float: right;
    color: #2319b7;
    margin-right: 2px;
            margin-top: -22px;"></i></a>
@endif
@if($note->type =='App\Notifications\followNotify')
        <a href="/{{LaravelLocalization::getCurrentLocale()}}/user/{{$note->data['follow_id']}}" style="color: #1c5013"><p>You have a new follower</p></a>

        <a href="/notifications/{{$note->id}}"><i class="fa fa-eye" style="    font-size: 16px;
    float: right;
    color: #2319b7;
    margin-right: 2px;
    margin-top: -22px;"></i></a>
@endif


        <hr>
    @endforeach    
               
                 </div>
    </li>
            
          
                @endif
            @endif      

              
                    <!-- END MESSAGES -->
          </ul>
        </div>
      
      </div>
    </nav>
 
    <!-- End navbar -->