<!DOCTYPE html>
<html lang="en">

<head>
    <title>PARADOW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Augmented Reality Multi colors Robot">
    <meta name="keywords" content="Robot can Draw, Agumented Reality ">
    <meta name="robots" content="index,follow">
    <link rel="icon" href="/website/images/logo.png" type="image/png" />
    <link rel="stylesheet" href="{{asset('/website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/animate.css')}}">
    <link href="/fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/website/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/responsive.css')}}">
    <style>
     
      #background{
 background-image: url("/website/images/background image.jpg");
   background-size: 100% 100%;
   
   width: 100%;
   height: 100%;
   position: fixed;
}
      .smartphone::-webkit-scrollbar{width: 0 !important;}
      .smartphone::-ms-scrollbar{width: 0 !important;}
      .smartphone{-ms-overflow-style:none ;}
      .smartphone{-moz-overflow-style:none ;}

      .naV {
    height: 70px;
    background-color: #9494940d;
}
.nav{
width:100% !important;
}
.header img {
    vertical-align: middle;
    border-style: none;
    height: 68px;
}
h3{
    margin-top: 24px;
    margin-bottom: 1rem;
}
.naV .nav-link {
    padding: 8px 8px;
    border: 1px solid;
    font-size: 17px;
    margin-top: 12px;
    color: black;
}

.leftcontent
{
  margin-top: 100px;
}
.smartphone {
  position: fixed;
  width: 340px;
  margin: 20px;
  margin-bottom: 0px;
  padding-bottom: 0%;
  border: 16px black solid;
  border-top-width: 60px;
  border-bottom-width: 40px;
  border-radius: 36px;
  overflow:scroll;
  background-color: black;
}

/* The horizontal line on the top of the device */
.smartphone:before {
  content: '';
  display: block;
  width: 60px;
  height: 5px;
  position: absolute;
  top: -30px;
  left: 50%;
  box-shadow: 1px 1px 8px grey;
  transform: translate(-50%, -50%);
  background: #333;
  border-radius: 10px;
}

/* The circle on the bottom of the device */
.button{
  margin-top: 8px;
    background-color: black;
    position: fixed;
    width: 30px;
    height: 30px;
    margin-left: 140px;
    border-radius: 47%;
    border: 1px solid silver;
}

/* The screen (or content) of the device */
.smartphone .content {
  width: 310px;
    height: 400px;
  background: white;
}
.smartphone .img1{
  width: 100%;
  height: 100%;
  border: none;
}
 .hide{
  display: none;
}

  .before .arrow{
    color: black;
     margin-left:130px;
     margin-top: 110px;
     font-size: 20px;
     font-weight: bold;
     position: fixed;
     display: none;
  }
  .afterarrow .arrow2{
    color: black;
     right: 350px;
    /* margin-right: -500px; */
    margin-top: 120px;
     font-size: 20px;
     font-weight: bold;
     /* display: block; */
     position: fixed;
     display: none;
  }
 .right{
    transform: rotate(179deg);
  }
  .arrowsize{
    width: 100px;
    height: 70px;
  }
body{
  height: 2100px;
}
@media screen and (min-width: 320px) and (max-width: 480px){
.nav-link button{
    display: block;
    padding: .3rem 0rem;
    width: 185px;
    
}
.smartphone .button {
    margin-top: 8px;
    background-color: black;
    position: fixed;
    width: 30px;
    height: 30px;
    margin-left: 115px;
}
.naV {
    height: 80px;
}
.naV li:nth-child(2) {
    position: relative;
      top: 0px;
    left: 0px;
}
.naV .nav-link {
    font-size: 12px;
    }
.naV .back{
    position: relative;
    top: 8px;
    margin-left: auto !important;
    }
.leftcontent {
    margin-top: 10px; 
}
#background {
height:115%;
}
.header img {
    height: 60px;
}
.smartphone {
    width: 297px;
    margin-left: 0px;
    }
    .smartphone .content {
    width: 265px;
}
}
@media screen and (min-width: 768px) and (max-width: 990px){
  #arrow1,#arrow3,#arrow7{
    margin-left: 10px !important;
  }
  #arrow8{
    margin-left: 50px !important;
  }
  #arrow2,#arrow6,#arrow9{
    right: 0px !important;
  }
  #arrow4 ,#arrow5{
right: 5px !important;
  }
 
  .arrowsize{
    width: 60px;
    height: 60px;
  }
  #text{
    width:60px !important;
  }
}
@media screen and (min-width: 990px) and (max-width: 1220px){
  #arrow1,#arrow8{
    margin-left: 140px !important;
  }
  #arrow2,#arrow6{
    right: 110px !important;
  }
  #arrow3{
    margin-left: 50px !important;
  }
 
  #arrow4,#arrow5,#arrow9{
    right: 130px !important;
  }
 
  #arrow7{
    margin-top: 170px !important;
    margin-left: 125px !important;
  }

}
@media screen and (min-width: 1230px) and (max-width: 1440px){
#arrow4{
  right:350px !important;
}
#arrow5,#arrow9{
  right: 330px !important;
}

}
    </style>
</head>

<body style="max-height:1500px;">
  <div id="background">
  <!-- <div class="speed">

  </div>
  <div class="spin">

  </div>
  <div class="mainn"> -->
     <!-- vertical breadcrumb -->

<!-- End vertical -->
<div class="header">
  <div class="naV">
  <div class="container">
    <ul class="nav">
      <li class="nav-item" >
        <img src="/website/images/logo.png" alt="logo image">
      </li>
      <li class="nav-item"><h3>PARADOW</h3>
      </li>
     
      <li class="nav-item ml-auto back">
        <a class="nav-link" href="/{{LaravelLocalization::getCurrentLocale()}}"><i class="fa fa-arrow-left"></i> Back to website</a>
      </li>
     
    </ul>
  </div>
  </div>
  <div class="nav2" style="display: none;">
    <div class="container">
    <ul class="nav">
      <li class="nav-item" id="show">
        <!-- <img src="images/logo.png" alt="logo image"> -->
      </li>
     
      <li class="nav-item ml-auto">

        <a class="nav-link" href="#">
        <button class="btn btn-info ml-5" style="background-color: rgb(65, 126, 65);"><i class="fab fa-google-play"></i>Download App</button></a>
      </li>
    </ul></div>
  </div>
</div>



<!-- Strat smartphone shape -->

<div class="container">
  <div class="row">
    <div class="col-md-6"id="left">
      <div class="leftcontent">
      <h4>Are you looking for pictures to draw on your wall ?</h4>
      <p>By using Augmented Reality, you can try image you choose on your wall before a device draw it.
      </p>
      <b>        Try it Now !<button class="btn btn-info ml-5" style="background-color: rgb(65, 126, 65);"><i class="fab fa-google-play mr-1"></i>Download the app</button>
      </b></div>
      <div class="before hide">
        <div class="arrow" id="arrow1" style="margin-left: 220px;"> 
          <img src="/website/images/arrow.png"class="arrowsize" alt="arrow" style="margin-left: 90px;" />
          <pre>Recommended photos
  for you depend
  on your prefrence</pre>
            </div>
            <div class="arrow" id="arrow3" >
              <img src="/website/images/arrow.png"class="arrowsize" alt="arrow" style="margin-left: 90px;" />
              <img src="/website/images/text.gif" style="width: 100px; height: 70px;" id="text"/>
              <pre>Enter your text 
that you would to 
draw on your wall</pre>
                </div>
                <div class="arrow" id="arrow7" style="margin-top: 180px; margin-left: 220px;"> 
                  <img src="/website/images/arrow.png"class="arrowsize" alt="arrow" style="margin-left: 90px;" />
                  <pre>if you love photo
click on the heart then
it's will save
in your favourit page
                  </pre>
                    </div>
            
                    <div class="arrow" id="arrow8" style="margin-left: 220px;margin-top: 100px;" > 
                      <img src="/website/images/arrow.png"class="arrowsize" alt="arrow" style="margin-left: 90px;" />
                      <pre>favourit page</pre>
                        </div>
      </div>
    </div>
  
    <div class="col-md-6">
      <div class="col-md-3">
      <div class="smartphone" scrolling="no">
        <div class="content">
          <img src="/website/images/home.jpg" alt="home" class="img1" id="img"/>
          
          <!-- <div id="img2" class="hide"> -->
         
              <img src="/website/images/home page.gif" alt="home page" class="img1 img2 hide" >
            
        
          <img src="/website/images/discover.png" alt="discover page" class="img1 img2 hide" >
          <img src="/website/images/cat.jpg" alt="categories page" class="img1 img2 hide" >
          <img src="/website/images/favourit.jpg" alt="favourit page" class="img1 img2 hide" >
        <!-- </div> -->
  
      </div>
      <div class="button"></div>
      </div>
    </div>
      <div class="col-md-3">
      <div class="afterarrow">
        <div class="arrow2" id="arrow2" style="margin-top: 300px; "> 
          <img src="/website/images/arrow2.png" class="arrowsize" alt="arrow" />
          <pre> popular photo
depend on
high rate
or most liked </pre>
            </div>
        <div class="arrow2" id="arrow4"> 
         <img src="/website/images/arrow2.png" class="arrowsize"/>
         <pre>click on
camera icon 
to show
the selected
image on wall </pre> 
</div>

<div class="arrow2" id="arrow5"style=" margin-top:240px">  
   <img src="/website/images/arrow2.png" class="arrowsize"/>
   <pre>
when you click 
on cartoon
you will show 
photo's cartoon</pre>
</div>
<div class="arrow2" id="arrow6"style=" margin-top:90px;right:330px">  
  <img src="/website/images/arrow2.png" class="arrowsize"/>
  <pre>photos cartoon
</pre>
</div>
<div class="arrow2" id="arrow9"style=" margin-top:210px">  
  <img src="/website/images/arrow2.png" class="arrowsize"/>
  <pre>
this star will
show the rate
of photo 
depend on 
how many
people love it</pre>
</div>
      </div>
    </div>
    </div>
  </div>
</div>





</div>





<!-- End smartphone shape -->



<script>
     // Start page App
     
     window.onload=function()
   {   
var x=window.matchMedia("(max-width:500px)");
if(!(x.matches)){
$(window).scroll( function () {
  
    <!--show.innerHTML = $(document).scrollTop();-->
    $(".smartphone").animate({scrollTop: window.pageYOffset-80},50);
   

    if($(document).scrollTop() >=50){
        $(".naV").hide(500);
        $(".nav2").show(500);    
        $(".leftcontent").hide(500);   
        $(".before").show();
        $(".smartphone").css("margin-left","-144px");
        $(".smartphone").css("box-shadow","2px 1px 16px grey");
        // $(".smartphone:after").css("left","0px");
        $("#img").hide();
        $(".img2").show(500);
  

    }
    else{
        $(".naV").show(500);
        $(".nav2").hide(500);    
        $(".leftcontent").show(500);  
        $(".before").hide(500); 
        $(".smartphone").css("margin-left","0px");
        $(".smartphone").css("box-shadow","0 0 0 grey");
        $("#img2").hide();
        $("#img").show(500);
                
    }
    if($(document).scrollTop() >=50 && $(document).scrollTop()<=160 ){
        $("#arrow1").fadeIn();
        $("#arrow2").fadeIn();
    }
    else{
        $("#arrow1").fadeOut();
        $("#arrow2").fadeOut();
    }
    if($(document).scrollTop() >=480 && $(document).scrollTop()<=500 ){
        $("#arrow3").fadeIn();
        $("#arrow4").fadeIn();  
    }
    else{
        $("#arrow3").fadeOut();
        $("#arrow4").fadeOut();  
    }
    if($(document).scrollTop() >=520 && $(document).scrollTop()<=540 ){
        $("#arrow5").fadeIn(); 
    }
    else{
        $("#arrow5").fadeOut();
    }
    if($(document).scrollTop() >=880 && $(document).scrollTop()<=920 ){
        $("#arrow6").fadeIn(); 
        $("#arrow7").fadeIn(); 
    }
    else{
        $("#arrow6").fadeOut();
        $("#arrow7").fadeOut(); 
    }
    if($(document).scrollTop() >=1280 && $(document).scrollTop()<=1320 ){
        $("#arrow8").fadeIn(); 
        $("#arrow9").fadeIn(); 
    }
    else{
        $("#arrow8").fadeOut();
        $("#arrow9").fadeOut(); 
    }
    if($(document).scrollTop() >=1330&& $(document).scrollTop()<=1400 ){
        $("#background").css("position","relative");
        $(".smartphone").css("position","relative");
        $(".button").css("position","relative");
        $(".before .arrow").css("position","relative");
        $(".afterarrow .arrow2").css("position","relative");
        $(".footer").show();
    }
    });
  }
  
  else{
    
  $(window).scroll( function () {
  
    <!--show.innerHTML = $(document).scrollTop();-->
    $(".smartphone").animate({scrollTop: window.pageYOffset-80},50);
   

    if($(document).scrollTop() >=50){
        $(".naV").hide(500);
        $(".nav2").show(500);    
        $(".leftcontent").hide(500);   
        $(".before").show();
        $(".smartphone").css("box-shadow","2px 1px 16px grey");
        // $(".smartphone:after").css("left","0px");
        $("#img").hide();
        $(".img2").show(500);
  

    }
    else{
        $(".naV").show(500);
        $(".nav2").hide(500);    
        $(".leftcontent").show(500);  
        $(".before").hide(500); 
        $(".smartphone").css("box-shadow","0 0 0 grey");
        $("#img2").hide();
        $("#img").show(500);
                
    }

    if($(document).scrollTop() >=1330&& $(document).scrollTop()<=1400 ){
        $("#background").css("position","relative");
        $(".smartphone").css("position","relative");
        $(".button").css("position","relative");
        $(".before .arrow").css("position","relative");
        $(".afterarrow .arrow2").css("position","relative");
        $(".footer").show();
    }
    });
  }
  
  
  }
      // End page App 
	
</script>


  <script src="{{asset('/website/js/jquery.min.js')}}"></script>
  <script src="{{asset('/website/js/all.min.js')}}"></script>
  <script src="{{asset('/website/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/website/js/wow.min.js')}}"></script>
  <script>/* Start Activate wow.js */
      wow = new WOW(
          {
              boxClass: 'wow',      // default
              animateClass: 'animated', // default
              offset: 0,          // default
              mobile: true,       // default
              live: true        // default
          }
      )
      wow.init();
/* End Activate wow.js */
  </script>

</body>

</html>