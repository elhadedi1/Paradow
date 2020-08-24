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

<div class="catDetails">
  <div class="container">
      @foreach($test as $data)
    <h3 class="title">{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</h3>
    <div class="detail">
      <ul class="list-inline">

        <li><span class="fa fa-map-marker"></span> Mansoura</li>
                    <li><span class="fa fa-calendar"></span> {{$data->created_at}}</li>
                    <li><span class="fa fa-user"></span> 
                    <a href="/user/{{ $data->user_id }}">{{$data->get_username()}}</a></li>
                  
              <!-- start rating -->
     <?php  $no_of_user=App\User::get()->count();
     $rate=($data->favProduct/$no_of_user)*5;
     ?>
    
     @for($i=1 ;$i<= 5;$i++)
     @if($rate>=1)          
            <li><i class="fa fa-star rate"></i></li>
                        @php   $rate--;
                        @endphp
                    @elseif($rate<=.5 && $rate >0)
                    <li><i class="fa fa-star-half-alt rate"></i></li>
                    @php $rate -=$rate;@endphp
                    @else
                    <li><i class="fa fa-star"></i></li>
                    @endif
                   
                    @endfor
                     <!-- end rating -->
                </ul>
             
            </div>
    <div class="row">

      <div class="col-xs-12 col-sm-8 col-md-8">
      
                <ul>
                  <li>{{trans('main.descriptionImg')}}: {{unserialize($data->description)[LaravelLocalization::getCurrentLocale()]}}</li>
                  <li><span>{{trans('main.usernameImg')}}: <a href="/user/{{ $data->user_id }}">{{$data->get_username()}}</a></span></li>

                  @if(Auth::check())
        

                  @if(Auth::user()->id==$data->user_id)
                  <li>



                  <!-----------Edit My Post------------>
   <a href="" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</a>
      

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Edit your Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

 

      <form action="{{ route('categories.update',$data->id) }}" method="POST" class="mt-5">
                {{ csrf_field() }}
              
   <div class="panel-body" >      
<div class="form-group row @if($errors->has('categoryName')) has-error @endif">
    <label for="title" class="col-sm-3 ml-5 col-form-label">categoryName</label>
    <div class="col-sm-7">

    <select class="form-control" name="categoryName">
             <option value=" {{$data->categoryName}}" selected="selected"> {{$data->categoryName}}</option>
             <option value="people" >People</option>
             <option value="nature">Nature</option>
             <option value="animal">Animal</option>
             <option value="other">Others</option>
    </select>
                <strong class="help-block">{{ $errors->first('title') }}</strong> 

    </div></div>
  </div>


  <div class="form-group row @if($errors->has('title')) has-error @endif">
    <label for="title" class="col-sm-3 ml-5 col-form-label">title</label>
    <div class="col-sm-7">
      <input type="number" class="form-control" id="title" placeholder="title" value="{{$data->title}}" name="title">
      <strong class="help-block">{{ $errors->first('title') }}</strong> 
    </div>
  </div>
 
  <div class="form-group row @if($errors->has('description')) has-error @endif">
    <label for="inputPassword" class="col-sm-3 ml-5 col-form-label">description</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="description" placeholder="description" value="{{$data->description}}" name="description">
      <strong class="help-block">{{ $errors->first('description') }}</strong> 
    </div>
  </div>

  <div class="form-group row @if($errors->has('price')) has-error @endif">
    <label for="inputPassword" class="col-sm-3 ml-5 col-form-label">price</label>
    <div class="col-sm-7">
      <input type="number" class="form-control" id="price" placeholder="price" value="{{$data->price}}" name="price">
      <strong class="help-block">{{ $errors->first('price') }}</strong> 
    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label ml-5">State of Photo</label>
    <div class="col-sm-7">
  <div class="form-check">
  <input class="form-check-input" type="radio" name="state" id="exampleRadios1" value="1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Special
  </label>
<br>
  <input class="form-check-input" type="radio" name="state" id="exampleRadios1" value="0" checked>
  <label class="form-check-label" for="exampleRadios1">
    Normal
  </label>
</div>
<!-- <div class="form-check">

</div> -->
</div></div>


  <div class="form-group row @if($errors->has('image')) has-error @endif">
    <label for="inputPassword" class="col-sm-3 col-form-label ml-5">image <strong style="font-size:12px;color:red;">*(PNG or JPG)</strong> </label>
    <div class="col-sm-7">
      <input type="file" class="form-control" id="inputPassword" value="{{$data->image}}" name="image">
      <strong class="help-block">{{ $errors->first('image') }}</strong> 
      <img src="/paradow/public/images/{{$data->image}}" style="top:-26px; height: 82px;">
    </div>
  </div>


  <div class="form-group row @if($errors->has('imageOnWall')) has-error @endif">
    <label for="inputPassword" class="col-sm-3 col-form-label ml-5">image <strong style="font-size:12px;color:red;">  *(.SVG)</strong></label>
    <div class="col-sm-7">
      <input type="file" class="form-control" id="inputPassword" value="{{$data->imageOnWall}}" name="imageOnWall[]">
      <strong class="help-block">{{ $errors->first('imageOnWall') }}</strong> 
      <img src="/paradow/public/images/{{$data->image}}" style="top:-26px; height: 82px;">
    </div>
  </div>

  <div class="btn-group ml-5">
          <button class="btn btn-primary" type="submit">Update Photo</button>
    </div> 

        </form>
    </div>  
    </div></div>

                  <!-----Delete Post------>
                  <a class="btn btn-danger btn-sm"data-id="{{$data->id}}" data-toggle="modal" data-target="#delete-data{{$data->id}}">Delete</a>
                  <form method="post" action="{{ route('categories.delete', $data->id) }}">
                  {{csrf_field()}}
              
                <!-- Modal -->
                <div class="modal modal-danger fade" id="delete-data{{$data->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">Are you sure you want to delete ?</h3>                  
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline"  data-dismiss="modal">Cancel</button>
                     
                        <input type="hidden" name="_method" value="delete">

                        <button class="btn btn-danger delete pull-right">Delete</button>
                        </div>  
                      </div>
                    </div>
                      </div>
                      
                      </form>    </li>
                    
                 
                  @endif
                  @endif


                  <li><span>{{trans('main.createdAtImg')}}: {{$data->created_at}}</span></li>
                      @if($data->price !=$data->priceAfterOff && $data->priceAfterOff!=0 )
                  <li> {{trans('main.priceImg')}}:{{$data->priceAfterOff }}<span style="color:red;text-decoration: line-through; padding-left: 5px; padding-top:5px;">{{$data->price}}</span></li>                   @endif
                          @if($data->price !=$data->priceAfterOff && $data->priceAfterOff==0)

                   <li><span>{{trans('main.priceImg')}}: {{$data->price}}$</span></li>
                   @endif
                   @if($data->price ==0 )
                   <li>{{trans('main.priceImg')}}: <span style="color:red;"> Free</span></li>
                   @endif
                
        <li>{{trans('main.shareImg')}}:
        <div class="sharethis-inline-share-buttons" style="z-index:-1"></div>
        </li>


    
               	<br>
<div id="favorite" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
		<h3 class="modal-title">{{trans('main.addCart')}}</h3>
	<button type="button " class="close" data-dismiss="modal">&times;</button>
    <br>
	  </div>


	@if(! (Auth::check()))

      <div class="modal-body">
        <p>{{trans('main.modalLogin')}}</p>
      </div>
      <div class="modal-footer">
        <a href="paradow/{{LaravelLocalization::getCurrentLocale()}}/signup" class="btn btn-light" style="background-color: #579a4b;color: white;">{{trans('main.create')}}</a>
        <a href="paradow/{{LaravelLocalization::getCurrentLocale()}}/signup" class="btn btn-light" style="background-color: #579a4b;color: white;">{{trans('main.login')}}</a>
	  </div>
	  @endif
    </div>
  </div>
</div><!-- add_product_modal -->
@if(Auth::check())

<div class="cart">
<a href="/{{LaravelLocalization::getCurrentLocale()}}/cart/{{$data->id}}" class="btn btn-success">{{trans('main.addCart')}}</a>
@endif

@if(! (Auth::check()))

<div class="cart">
<a href="paradow/{{LaravelLocalization::getCurrentLocale()}}/cart/{{$data->id}}" class="btn btn-success" data-toggle="modal" data-target="#favorite">{{trans('main.addCart')}}</a>
@endif


  </div>

      </div>
            </ul>

      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="catImage">
    
        <img src="/paradow/public/images/{{$data->imageOnWall}}" alt="{{$data->title}}">
        </div>
      </div>
    @endforeach
    </div>
      
          </div>
          </div>  
<hr>
  <div class="styleComment">
  <div class="container">
   <div class="row">


   <div class="col-xs-12 col-sm-8 col-md-8">
   <div class="comments">
         <h2>{{trans('main.comment')}}</h2>
		<div class="comment-wrap">
    @if(Auth::check())
       <div class="photo">
						<div class="avatar" style="background-image: url('/images/{{Auth::User()->photo}}')"></div>
				</div>
        @endif
				<div class="comment-block">
						<form method="post" action="{{ route('comment.add') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                            <input type="text" name="comment_body"  class="form-control"  placeholder="{{trans('main.enterComment')}}.." />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                </div>
                <strong class="help-block" style="color:red;">{{ $errors->first('comment_body') }}</strong> 
                <div class="form-group">
                @if(Auth::check())

                            <input type="submit" class="btn btn-warning" value="{{trans('main.addComment')}}" />
                            @endif
                            @if(! Auth::check())
                                            <strong>{{trans('main.msgErr')}}</strong>
                            <input type="submit" class="btn btn-warning" value="{{trans('main.addComment')}}" disabled="disabled"/>
        <a href="/signup" class="btn btn-light" style="background-color: #579a4b;color: white;">{{trans('main.login')}}</a>
@endif

                        </div>
						</form>
				</div>
		</div>
   </div>
<br>

<div class="row">

@foreach($comment as $rev)
    <div class="col-xs-12 col-sm-8 col-md-8">

     @if($data->id==$rev->commentable_id)
		<div class="comment-wraps">
				<div class="photo">
						<div class="avatar" style="background-image: url('/images/{{$rev->get_userphoto()}}')"></div>
				</div>
				<div class="comment-block">
						<p class="comment-text">{{$rev->body}}</p>
						<div class="bottom-comment">
								<div class="comment-date">{{trans('main.commentBy')}} : <b class="uName">{{ $rev->user_name }}</b></div>
                <br>
                <div class="comment-date">{{trans('main.createdAtImg')}}{{ $rev->created_at }}</div>



                @if(Auth::check())

     @if($rev->user_id == Auth::user()->id)
                        
       <a href="{{Route('comments.delete',$rev->id)}}" class="btn btn-danger btn-sm deletebtn">Delete</a>
       <!-- <a href="" class="btn btn-primary editbtn  msgModal btn-sm" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">Edit</a> -->
       <button type="submit" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal2{{$rev->id}}" data-whatever="@mdo" name="submit">Edit</button>
         <div class="modal fade" id="exampleModal2{{$rev->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
         
                 <h5 class="modal-title" id="exampleModalLabel">{{trans('main.editComment')}}</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <form action="{{ Route('comments.update',$rev->id) }}" method="POST" class="mt-5">
                         {{ csrf_field() }}
                         <div class="styleForm form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                             <textarea class="form-control" id="body" name="body" placeholder="{{trans('main.enterComment')}}">{{ $rev->body }}</textarea>
                             <small class="text-danger">{{ $errors->first('body') }}</small>
                         </div>
                         <div class="styleForm form-group">
                             <button type="submit" class="btn btn-info" name="submit">{{trans('main.updateComment')}}</button>
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('main.close')}}</button>
                         </div>
                     </form>
          
         
             </div>
           </div>
         </div>
     @endif @endif

                    <br>
						</div>
				</div>
		</div>

       @endif
             </div>

                @endforeach 
</div>

</div>
   </div>
   </div>          
                <br>  
@stop
