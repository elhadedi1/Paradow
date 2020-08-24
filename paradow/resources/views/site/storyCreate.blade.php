@extends('site/layout/main')

@section('content')

<style>
h4{color:gray;}
#rightPanel{
    min-height:415px;
    width: 100%;
}


.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}

</style>
<div class="container">
<form class="searchBox" style="display: none;" method="get" action="{{url('/search')}}">
							{{csrf_field()}}
        <input type="text" name="search" placeholder="{{trans('main.searchNow')}}">
        <span id="cancel">
        <i class="fa fa-times"></i></span>
    </form>

  </div>
<div class="container">
<br>
<br>

	<div class="row" id="main">
     
        <div class="col-md-12 well" id="rightPanel">
   
    <h4 class="ml-5"> Add Your Story</h4>
    <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal ml-5 mr-5" action="{{ route('story.add')}}"  method="post" novalidate="novalidate">
    <hr class="colorgraph">           
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
       
                                           <div class="panel-body">      
             
           <div class="form-group row @if($errors->has('categoryName')) has-error @endif">
           <label for="inputPassword" class="col-sm-2 col-form-label">name</label>
                                    <div class="col-md-6">
                                    <input type="text" class="form-control" id="inputPassword" placeholder="Name..." name="name">
                                       <strong class="help-block">{{ $errors->first('name') }}</strong> 
                     </div>
         </div>
         <div class="form-group row @if($errors->has('title')) has-error @endif">
           <label for="inputPassword" class="col-sm-2 col-form-label">Story</label>
           <div class="col-sm-6">
             <textarea type="text" class="form-control" id="inputPassword" placeholder="story" name="story"></textarea>
             <strong class="help-block">{{ $errors->first('story') }}</strong> 
       
           </div>
         </div>
       
         <div class="form-group row @if($errors->has('image')) has-error @endif">
           <label for="inputPassword" class="col-sm-2 col-form-label">image</label>
           <div class="col-sm-6">
             <input type="file" multiple class="form-control" id="inputPassword" name="image[]">
             <strong class="help-block">{{ $errors->first('image') }}</strong> 
       
           </div>
         </div>
      
            <button class="btn btn-primary center" type="submit" >Submit</button>                                                                                                                         
                </div>  
                <hr class="colorgraph">
                <br>                                             
           </form>
	</div>
</div>

</div>
    </div>
   @stop
