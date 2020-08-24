
  @extends('site/layout/main')

@section('content')
<link rel="stylesheet" href="{{asset('/website/css/order_style.css')}}">

        <div class="lightbox-blanket">
    <div class="pop-up-container">
      <div class="pop-up-container-vertical">
        <div class="pop-up-wrapper">
          <!-- <div class="go-back" onclick="GoBack();"><i class="fa fa-arrow-left"></i>
          </div> -->
          <a class="go-back" href="/paradow"><i class="fa fa-arrow-left"></i></a>
          <div class="product-details">
            <div class="product-left">
            <div class="product-title">

            {{unserialize($cat->title)[LaravelLocalization::getCurrentLocale()]}}             
                </div>
              <div class="product-info">
              {{unserialize($cat->description)[LaravelLocalization::getCurrentLocale()]}}
    
                <div class="product-price" price-data="185">
                  {{$cat->price}}$<span class="product-price-cents"></span>
                </div>
              </div>
              <div class="product-image">
                <img src="/paradow/public/images/{{$cat->image}}" />
              </div>
            </div>
            <div class="product-right">

              <div class="product-available">
                In stock. <span class="product-extended"><a href="#">Buy Extended Warranty</a></span>
              </div>
               <div class="product-rating">
                <div class="product-rating-details">(25 <span class="rating-count"></span> reviews)
                </div>
              </div>
              <br>
              <div class="container">
                    <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal ml-5 mr-5" action="/paradow/cart/{{$cat->id}}"  method="get" novalidate="novalidate">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                     
                     <button type="submit" style="width:150px; float:left;" class="btn btn-default">{{trans('main.addCart')}}</button>

                    </form>
                                  <!--<strong style="font-size: 18px;margin:70px;color: #f30707;">{{trans('main.notAvaliable')}}</strong>-->
              </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
  </div>


@stop
