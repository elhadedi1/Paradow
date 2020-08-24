      
      <!-- Strat info App -->

<div class="infoApp" style="background:url('/images/uiMobile.jpg');background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;    opacity: 0.8;">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-12" style="float:left">
        <h3>{{trans('main.comingSoon')}}</h3>
        <img src="/paradow/public/images/googlePlay-AppStore.png" alt="AppStore Image" class="appStore">
        <hr>
        <p>{{trans('main.moreInfo')}}<i class="fa fa-arrow-alt-circle-right"></i></p><a class="btn btn-primary btnGo" href="/{{LaravelLocalization::getCurrentLocale()}}/download">{{trans('main.visit')}}</a>
      </div>
      <div class="col-md-6 col-lg-6 col-sm-12" style="float:right">
      </div>
    </div>
  </div>
</div>

<!--End info App   -->

   <!-- Chat Nodal-->
   <div class="modal fade" id="myModal" role="dialog" >
     <div class="modal-dialog">
   
       <div class="modal-content">
           <iframe width="100%" height="450" allow="microphone;"
           src="https://console.dialogflow.com/api-client/demo/embedded/7e1a5964-729a-4d7c-a6d5-454f4c5adeca"></iframe>
       </div>
       
     </div>
   </div>
<!------------------------Start Footer--------------------->
<div class="container-fluid" style="background-color: #5e5f5e;">
  <div class="footer-cta pl-5 pr-5 pt-2 pb-2 mr-5 ml-5">
      <div class="row">
        @foreach($aboutRes as $pageRes)
          <div class="col-xl-4 col-md-5 col-sm-12 col-xs-12 col-lg-4 mb-30 mt-sm-2  ">
              <div class="single-cta ">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="cta-text">
                      <h4>{{trans('main.find')}}</h4>
                      <span>{{unserialize($pageRes->address)[LaravelLocalization::getCurrentLocale()]}}</span>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-md-3 col-sm-12 col-xs-12 col-lg-4 mb-30 mt-sm-2">
              <div class="single-cta">
                  <i class="fas fa-phone"></i>
                  <div class="cta-text">
                      <h4>{{trans('main.call')}}</h4>
                      <span>          <a style="color:white;" href="tel:{{unserialize($pageRes->phone)[LaravelLocalization::getCurrentLocale()]}}">{{unserialize($pageRes->phone)[LaravelLocalization::getCurrentLocale()]}}</a>
</span>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-md-4 col-sm-12 col-xs-12 col-lg-4 mb-30 mt-sm-2">
              <div class="single-cta">
                  <i class="far fa-envelope-open"></i>
                  <div class="cta-text">
                      
                      <h4>{{trans('main.mail')}}</h4>
                      <span> <a style="color:white;" href="mailto:{{$pageRes->email}}">{{$pageRes->email}}</a> </span>
                            
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="footer-content pt-3 pl-5 ml-5 mr-5  pr-5 pb-1">
      <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
              <div class="footer-widget">
                  <div class="footer-logo">
                      <a href="/public/{{LaravelLocalization::getCurrentLocale()}}"><img src="/paradow/public/images/{{$pageRes->logo_footer}}" class="img-fluid" alt="Logo Footer"></a>
                  </div>
                  <div class="footer-text">
                      <p>{{unserialize($pageRes->about_footer)[LaravelLocalization::getCurrentLocale()]}}</p>
                  </div>
                  <div class="footer-social-icon mb-2">
                      <span>{{trans('main.follow')}}</span>
                      <a href="{{$pageRes->facebook_link}}"><img src="/paradow/public/website/images/iconfinder_2_-_Facebook_1775226.svg" style="width: 30px;" /></a>
                      <a href="{{$pageRes->youtube_link}}"><img src="/paradow/public/website/images/iconfinder_youtube_834723.svg" style="width: 30px;" /></a>
                      <a href="{{$pageRes->github_link}}"><img src="/paradow/public/website/images/iconfinder_github_317712.svg" style="width: 30px;" /></a>
                  </div>                </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
              <div class="footer-widget">
                  <div class="footer-widget-heading">
                      <h3>{{trans('main.link')}}</h3>
                  </div>
                  <ul>
                      <li><a href="/{{LaravelLocalization::getCurrentLocale()}}">{{trans('main.home')}}</a></li>
                 
   <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/category">{{trans('main.gallery')}}</a></li>
                      <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/about">{{trans('main.about')}}</a></li>
            @if(Auth::check())
             @if(isset(Auth::user()->email))

                      <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/profilee">{{trans('main.registerNow')}}</a></li>
                    <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/order">{{trans('main.order')}}</a></li> 
                    <li> <a href="/{{LaravelLocalization::getCurrentLocale()}}/profilee">{{trans('main.portfolio')}}</a></li>
                    
                      @endif
                    @endif
                      @if(! Auth::check())
                         <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/signup">{{trans('main.registerNow')}}</a></li>
                     <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/signup">{{trans('main.order')}}</a></li>                     

                      <li><a href="/{{LaravelLocalization::getCurrentLocale()}}/signup">{{trans('main.portfolio')}}</a></li>
                    @endif
                   
                  </ul>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
              <div class="footer-widget">
                  <div class="footer-widget-heading">
                      <h3>{{trans('main.subscribe')}}</h3>
                  </div>
                  <div class="footer-text mb-25">
                      <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                  </div>
                 <button type="button" class="btn btn-primary msgModal" data-toggle="modal" data-target="#myModal" data-whatever="@mdo" style="font-size: 15px;"><i class="far fa-comment" style="font-size: 15px;"></i> chat with us</button>
              </div>
          </div>
          @endforeach
    </div>
      </div></div>   

<!------------------------End Footer--------------------->


<!-- Message Box modal -->
<div class="msgBox">
<button type="button" class="btn btn-primary msgModal" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-envelope"></i></button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">{{trans('main.contactTitle')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <form method="post" action="/conatct" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">   

      <div class="modal-body">
                <div class="form-group @if($errors->has('email')) has-error @endif">

            <label for="recipient-name" class="col-form-label">{{trans('main.email')}}:</label>
						<input type="email" name="email"class="form-control" id="recipient-name" required placeholder="{{trans('main.writeEmail')}}">
                        <strong class="help-block">{{ $errors->first('email') }}</strong> 
          </div>
          <div class="form-group @if($errors->has('msgContent')) has-error @endif">
          <label for="message-text" class="col-form-label">{{trans('main.yourMsg')}}:</label>
						<textarea class="form-control" name="msgContent" placeholder="{{trans('main.writeMsg')}}"></textarea>
					  <strong class="help-block">{{ $errors->first('msgContent') }}</strong> 
          </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">{{trans('main.sendMsg')}}</button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('main.close')}}</button>
      </div>
      </form>

    </div>
  </div>
</div>
  </div>

  <script src="{{asset('/public/website/js/main.js')}}"></script>
  <script src="{{asset('/public/website/js/jquery.min.js')}}"></script>
  <script src="{{asset('/public/website/js/all.min.js')}}"></script>
  <script src="{{asset('/public/website/js/popper.min.js')}}"></script>
  <script src="{{asset('/public/website/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/public/website/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/public/website/js/wow.min.js')}}"></script>
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


  <!-- Strat follow links -->
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e6b9dc2ecef070012a1432d&product=inline-share-buttons&cms=sop' async='async'></script>
  <!-- End follow -->
  
  <!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5eafa6a3c5bbbf7d"></script>-->
</body>

</html>