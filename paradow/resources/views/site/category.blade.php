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
       <!-- Start Category -->
            
	   <div class="category">
                <h2 class="h2 text-center">{{trans('main.titleCategoryPage')}}</h2>

                <div class="container">
                    <div class="col-sm-12 col-md-12">
                        <span>{{trans('main.titleSearch')}}</span>
                    <input id="myInput" type="text" placeholder="{{trans('main.searchNow')}}"></div>
                    <hr>

                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-outline-light" id="people">{{trans('main.people')}}</button>
                            <button class="btn btn-outline-light" id="nature">{{trans('main.nature')}}</button>
                            <button class="btn btn-outline-light" id="animal">{{trans('main.animal')}}</button>
                            <button class="btn btn-outline-light" id="other">{{trans('main.other')}}</button>
						</div>
						@if(Auth::check())	
	@php $favs=$users->favProduct;
				
				$d=explode(',',$favs);
				
				@endphp
				@endif
                        <div class="col-md-10">
                            <div class="people" style="display: block;">
                                <div class="row">
								@foreach($cat as $data)
								@if($data->is_approved==1)
				@if($data->categoryName === 'people')

                                    <div class="col-sm-4 col-lg-4 col-md-4 ">
                                        <ul>							

                                            <li class="roww">
											@php
											
											$rate=round(($data->favProduct/$no_of_user)*5);
											if($rate<= 0.5)
												$rate=0.5;
											
                $img=explode(",",$data->image);
                @endphp
                                                <a href="category/{{$data->id}}"><img src="/paradow/public/images/{{$img[0]}}" alt="{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}" class="dish-main"width="250px" height="250px" ></a>
                                                <p class="dish-rate"> {{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</p>

                                                <div class="star">
                                                    <p>{{$rate}}</p> <i class="fa fa-star"></i>
                                                </div>
												@if(Auth::check())
						  @php $t=0; @endphp
				@for($i=0; $i< count($d);$i++)
						  <?php
						
                   if($d[$i] == $data->id){
					   $t +=1;
				
				   }
				   else{
					   $t +=0;
				   }
				  
				   ?>
                @endfor
				@if($t ==1)
				<a href="categorys/{{$data->id}}"><span class="fa fa-heart" style="color:red;"></span></a>
			
                @endif
				@if($t ==0)
				<a href="categor/{{$data->title}}"><span class="fa fa-heart" style="color:rgb(150, 145, 145);"></span></a>
                @endif
							  @endif
							  @if(!Auth::check())
							<a href="#" data-toggle="modal" data-target="#favorite"><span class="fa fa-heart" style="color:rgb(150, 145, 145);"></span></a>
							@endif							
                                            </li>
                                        </ul>
									</div>
									@endif
					@endif
					@endforeach
</div>
</div>
     

                            <div class="nature" style="display:none;">
                                <div class="row">
								@foreach($cat as $data)
								@if($data->is_approved==1)
				@if($data->categoryName === 'nature')

                                    <div class="col-sm-4 col-lg-4 col-md-4">
                                        <ul>
                                            <li class="roww">
											@php
												$rate=round(($data->favProduct/$no_of_user)*5);
											if($rate<= 0.5)
												$rate=0.5;
                $img=explode(",",$data->image);
                @endphp
				<a href="category/{{$data->id}}"><img src="/paradow/public/images/{{$img[0]}}" alt="{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}" class="dish-main"width="250px" height="250px" ></a>
                                                <p class="dish-rate"> {{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</p>
                                                <div class="star">
                                                    <p>{{$rate}}</p><i class="fa fa-star"></i>
                                                </div>
												@if(Auth::check())
						  @php $t=0; @endphp
				@for($i=0; $i< count($d);$i++)
						  <?php
						
                   if($d[$i] == $data->id){
					   $t +=1;
				
				   }
				   else{
					   $t +=0;
				   }
				  
				   ?>
                @endfor
				@if($t ==1)
				<a href="categorys/{{$data->id}}"><span class="fa fa-heart" style="color:red;"></span></a>
			
                @endif
				@if($t ==0)
				<a href="categor/{{$data->title}}"><span class="fa fa-heart" style="color:rgb(150, 145, 145);"></span></a>
                @endif
							  @endif
							  @if(!Auth::check())
							<a href="#" data-toggle="modal" data-target="#favorite"><span class="fa fa-heart" style="color:rgb(150, 145, 145);"></span></a>
							@endif					
                                    </li>
                       
                                </ul>
							</div>
							
					@endif
					@endif
					@endforeach
</div>
</div>
                            <div class="animal" style="display:none;">
                                <div class="row">
								@foreach($cat as $data)
								@if($data->is_approved==1)
				@if($data->categoryName === 'animal')

                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <ul>
                                            <li class="roww">
											@php
	$rate=round(($data->favProduct/$no_of_user)*5);
											if($rate<= 0.5)
												$rate=0.5;
												$img=explode(",",$data->image);
                @endphp
				<a href="category/{{$data->id}}"><img src="/paradow/public/images/{{$img[0]}}" alt="{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}" class="dish-main"width="250px" height="250px" ></a>
                                                <p class="dish-rate"> {{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</p>
                                                <div class="star">
                                                    <p>{{$rate}}</p> <i class="fa fa-star"></i>
                                                </div>
												@if(Auth::check())
						  @php $t=0; @endphp
				@for($i=0; $i< count($d);$i++)
						  <?php
						
                   if($d[$i] == $data->id){
					   $t +=1;
				
				   }
				   else{
					   $t +=0;
				   }
				  
				   ?>
                @endfor
				@if($t ==1)
				<a href="categorys/{{$data->id}}"><span class="fa fa-heart" style="color:red;"></span></a>
			
                @endif
				@if($t ==0)
				<a href="categor/{{$data->title}}"><span class="fa fa-heart" style="color:rgb(150, 145, 145);"></span></a>
                @endif
							  @endif
							  @if(!Auth::check())
							<a href="#" data-toggle="modal" data-target="#favorite"><span class="fa fa-heart" style="color:rgb(150, 145, 145);"></span></a>
							@endif		
									</div>
									@endif
					@endif
					@endforeach
</div>
</div>
          
                            <div class="other" style="display:none;">
                                <div class="row">
								@foreach($cat as $data)
								@if($data->is_approved==1)
				@if($data->categoryName === 'other')

                                    <div class="col-sm-4 col-lg-4 col-md-4">
                                        <ul>
                                            <li class="roww">
											@php
	$rate=round(($data->favProduct/$no_of_user)*5);
											if($rate<= 0.5)
												$rate=0.5;
												$img=explode(",",$data->image);
                @endphp
				<a href="category/{{$data->id}}"><img src="/paradow/public/images/{{$img[0]}}" alt="{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}" class="dish-main"width="250px" height="250px" ></a>
                                                <p class="dish-rate"> {{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</p>
                                                <div class="star">
                                                    <p>{{$rate}}</p> <i class="fa fa-star"></i>
                                                </div>
												@if(Auth::check())
						  @php $t=0; @endphp
				@for($i=0; $i< count($d);$i++)
						  <?php
						
                   if($d[$i] == $data->id){
					   $t +=1;
				
				   }
				   else{
					   $t +=0;
				   }
				  
				   ?>
                @endfor
				@if($t ==1)
				<a href="categorys/{{$data->id}}"><span class="fa fa-heart" style="color:red;"></span></a>
			
                @endif
				@if($t ==0)
				<a href="categor/{{$data->title}}"><span class="fa fa-heart" style="color:rgb(150, 145, 145);"></span></a>
                @endif
							  @endif
							  @if(!Auth::check())
							<a href="#" data-toggle="modal" data-target="#favorite"><span class="fa fa-heart" style="color:rgb(150, 145, 145);"></span></a>
							@endif		
                                    </div>
									@endif
					@endif
					@endforeach
</div>
</div>
          
                                </div>
                            </div>
               </div>
	<!-- End category -->
	

					
<div id="favorite" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
		<h3 class="modal-title">{{trans('main.addFav')}}</h1>
		<button type="button" class="close" data-dismiss="modal">&times;</button>

	  </div>
	  @if(Auth::check())
    @if(isset(Auth::user()->email))
	<div class="modal-body">
	<form action="{{url('category/'.Auth::user()->id.'/StoreComment')}}" enctype="multipart/form-data" role="form" class="form-horizontal" method="post" novalidate="novalidate">
				 <button class="btn btn-primary" type="submit">{{trans('main.addPhoto')}}</button>

	</form>
      </div>
	@endif
	  @endif

	@if(! (Auth::check()))

      <div class="modal-body">
        <p>{{trans('main.modalSorry')}}</p>
      </div>
      <div class="modal-footer">
        <a href="/signup" class="btn btn-light" style="background-color: #579a4b;color: white;">{{trans('main.create')}}</a>
        <a href="/signup" class="btn btn-light" style="background-color: #579a4b;color: white;">{{trans('main.login')}}</a>
	  </div>
	  @endif
    </div>
  </div>
</div><!-- add_product_modal -->
@stop