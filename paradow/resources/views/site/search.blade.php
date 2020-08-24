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
<div class="category">
                <h2 class="h2 text-center">{{trans('main.resultSearch')}}</h2>

                <div class="container">
                    <div class="row">
				@if($gallery->count())
				@foreach($gallery as $data)				
						  @if(Auth::check())
						  @php $favs=$user->favProduct;
				
				$d=explode(',',$favs);
				
				@endphp
				@endif

				<div class="col-sm-4">
                                        <ul style="list-style: none;">							

                                            <li class="roww">
											@php
											$rate=round(($data->favProduct/$no_of_user)*5);
                $img=explode(",",$data->image);
                @endphp
                                                <a href="category/{{$data->id}}"><img src="/images/{{$img[0]}}" alt="Girl Image" class="dish-main"></a>
                                                <p class="dish-rate">{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}
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
					@endforeach
			@else
				<div style="    font-size: 20px;
    margin: 40px;">{{trans('main.resultMsg')}}.</div>
			@endif
				</div>

</div>

					
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
