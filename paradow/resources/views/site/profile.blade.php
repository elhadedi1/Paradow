@extends('site/layout/main')

@section('content')
<style>
   @media screen and (min-width: 320px) and (max-width: 480px){
   .card2 .row
   {
    width: 338px !important;
    }
   .card-body
   {
       margin-top: -107px !important;
margin-left: 45px !important;
   }
   h4, span
   {
           font-size: 13px !important;
   }
  .card-img-top
   {
       width: 50% !important;
height: 100px !important;
   }
.nav-tabs {
    width: 115% !important;
    margin-left: -6%;
}
#myTab .nav-item {
    width: 16%;
    text-align: center;
    margin: 2px 1% !important;
    padding-left: 41px;
}
#myTab .nav-link {
    font-size: 12px;
    padding: 3px !important;
    margin-left: -27px;
    margin-right: -49px;
}
#my-tab .alert-primary{

    font-size: 10px;
}
.profile img {
    width: 92px;
}
.client .col-lg-3
{
    margin:20px 0px !important;
}
.profile .row {
width: 255px;
margin-left: 6%;
}
}

   @media screen and (min-width: 481px) and (max-width: 767px){
   .card-img-top
{
    height: 135px !important;
padding: 10px !important;
width: 100% !important;
}
.nav-tabs {
    width: 97% !important;
    margin-left: 0%;
}
#myTab .nav-item {
    width: 34% !important;
    text-align: center;
    margin: 3px -7% !important;
    padding-left: 92px;
}
#my-tab .alert-primary{

    font-size: 10px;
}
#myTab .nav-link {
    font-size: 12px;
    padding: 3px !important;
    margin-left: -50px;
    margin-right: 3px;
}
.client .col-lg-3 {

    max-width: 57% !important;
}
.profile .p {
    width: 120px;
}
}

 @media screen and (min-width: 768px) and (max-width: 990px){
   
.nav-tabs {
    width: 97% !important;
    margin-left: 0%;
}
.card-img-top
{
    height: 87px !important; 
}
#myTab .nav-item {
    width: 34% !important;
    text-align: center;
    margin: 3px -7% !important;
    padding-left: 92px;
}
#my-tab .alert-primary{

    font-size: 10px;
}
#myTab .nav-link {
    font-size: 12px;
    padding: 3px !important;
    margin-left: -50px;
    margin-right: 3px;
}
.profile .p {
    width: 120px;
}
}


 @media screen and (min-width: 991px) and (max-width: 1280px){
   
.nav-tabs {
    width: 97% !important;
    margin-left: 0%;
}
#myTab .nav-item {
    width: 34% !important;
    text-align: center;
    margin: 3px -7% !important;
    padding-left: 92px;
}
#my-tab .alert-primary{

    font-size: 10px;
}
#myTab .nav-link {
    font-size: 12px;
    padding: 3px !important;
    margin-left: -50px;
    margin-right: 3px;
}
.profile .p {
    width: 120px;
}
}
</style>
<div class="profile">
    <div class="container">
      <div class="client">

        <div class="row">
          <div class="col-xs-3 col-sm-6 col-md-4 col-lg-3 ">
              <img class="img-responsive" id="profile-image"  src="/images/{{Auth::user()->photo}}">
          </div>
          <div class="col-xs-3 col-sm-6 col-md-3 col-lg-3 ">
              <h5 class="ml-2 mt-5">{{ Auth::user()->name}}</h5>
              <span>Member since : {{ Auth::user()->created_at}}</span>
             </div>
          <div class="col-xs-3 col-sm-12 mt-sm-2 col-md-5 col-lg-5 text-center">
            <div class="row">
              <div class="col-xs-3 col-sm-8 col-md-12 col-lg-12 box ">
                <i class="fa fa-inbox"></i>
                <a href="/{{LaravelLocalization::getCurrentLocale()}}/viewPosts"><p class=""> {{trans('main.myWork')}} </p></a>
              </div>
            
              <div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 box">
                <i class="fa fa-cog"></i>
                <a href="/{{LaravelLocalization::getCurrentLocale()}}/profileSetting"><p class="p">{{trans('main.profileSetting')}}</p></a>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 box">
                <i class="fa fa-credit-card"></i>
                <a href="/{{LaravelLocalization::getCurrentLocale()}}/userAccount"><p class="p">{{trans('main.myAcc')}} </p></a>
              </div>
            </div>
          </div>
         </div>    
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item col-xs-8 col-sm-4 col-md-4 col-lg-2">
          <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
        </li>
        <li class="nav-item col-xs-8 col-sm-4 col-md-4 col-lg-2">
          <a class="nav-link" id="favourite-tab" data-toggle="tab" href="#favourite" role="tab" aria-controls="favourite" aria-selected="false">Favourite</a>
        </li>
        <li class="nav-item col-xs-8 col-sm-4 col-md-4 col-lg-2 mb-2">
          <a class="nav-link" id="followers-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="followers" aria-selected="false">Followers</a>
        </li>
        <li class="nav-item col-xs-8 col-sm-4 col-md-4 col-lg-2 mb-2">
          <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
        </li>
        <li class="nav-item col-xs-8 col-sm-4 col-md-4 col-lg-2 ">
          <a class="nav-link" id="gallary-tab" data-toggle="tab" href="#gallary" role="tab" aria-controls="gallary" aria-selected="false">Gallery</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="home-tab">
          <div class="row">
            <div class="alert alert-primary" style=" width: 100%;">Now, You can upload your design in a website and share it</div>
          
          
            <!----------start Dashboard form---------->
            <form  enctype="multipart/form-data"  action="{{url('/profile')}}"  method="post" >
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
             
              <div class="form-row @if($errors->has('title')) has-error @endif">
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Title of photo</label>
                  <select class="form-control" name="title">
                        <option value="people"> People</option>
                        <option value="nature">Nature</option>
                        <option value="animal">Animal</option>
                        <option value="other">Others</option>
                  </select>
                  <strong class="help-block">{{ $errors->first('title') }}</strong> 
                </div>
              </div>

              <div class="form-row @if($errors->has('no_of_color')) has-error @endif">
              <div class="form-group col-md-12">
                <label for="inputAddress">Avaliable Colors</label>
                <select class="form-control" name="no_of_color">
                    <option value="one"> 1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                </select>
                <strong class="help-block">{{ $errors->first('no_of_color') }}</strong>
                   </div>


              <div class="form-group col-md-6 @if($errors->has('width')) has-error @endif">
                <label for="inputAddress2">Width of photo</label>
                <input type="number" class="form-control" id="width" placeholder="width" name="width">
                <strong class="help-block">{{ $errors->first('width') }}</strong> 
              </div>

              <div class="form-group col-md-6 @if($errors->has('height')) has-error @endif">
                <label for="inputAddress2">Height of photo</label>
                <input type="number" class="form-control" id="height" placeholder="height" name="height">
                 <strong class="help-block">{{ $errors->first('height') }}</strong> 
              </div>
              </div>
  
              <div class="form-row col-md-12 @if($errors->has('image')) has-error @endif">
                <div class="form-group col-md-12">
                  <label for="inputCity">Upload Photo</label>
                  <input type="file" multiple class="form-control" id="inputPassword" name="image[]">
                  <strong class="help-block">{{ $errors->first('image') }}</strong> 
                </div>
          
              </div>
              
                <div class="btn-group ">
                 <button class="btn btn-primary center" type="submit">Add Photo</button>
                </div> 

            </form>
          </div>
        </div>
        <!----------End Dashboard---------->



        <!----------Start Favourite---------->
        <div class="tab-pane fade" id="favourite" role="tabpanel" aria-labelledby="avourite-tab">
          <h5><i class="fa fa-star"></i> Favourite Photos</h5>
          <div class="row mb-5">
             @php $count = 1; 
               $y=array($catdetails->favProduct);
               $dd=explode(',',$catdetails->favProduct);
             @endphp


             @foreach($catt as $data)
             @foreach($dd as $d)
            
              @if($data->id == $d)
            
          <div class="col-md-3">
            <div class="card card1">
              <img class="card-img-top" src="/images/{{ $data->image}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</h5>
              </div>
            </div>
          </div>
         
            @php $count ++; @endphp
            @endif
            @endforeach
            @endforeach
       
          
        </div>
        </div>
<!----------End Favourite---------->

    <!----------Start Followers---------->
    <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">
            @foreach($followers as $ff)
                @if(Auth::user()->id == $ff->follow_id)
                       <div class="col-sm-12 col-xs-12 col-md-8">
              <div class="card card2">
                <div class="row">
                  <div>
                <img class="card-img-top" src="/images/{{$ff->get_userimg()}}" alt="Card image cap">
                </div>
                <div>
                <div class="card-body">
                  <h4 class="card-title">{{$ff->get_username()}}</h4>
                  <span><i class="fa fa-clock"></i>{{$ff->created_at}}</span>
                  <br>
                 <br>
                <a href=" /{{LaravelLocalization::getCurrentLocale()}}/user/{{ $ff->user_id }}" class="btn btn-secondary" style="width: 121px;"> Visit <i class="fa fa-person-booth"></i></a>
                
                </div>
                </div>
              </div>
              </div>
                          </div>

              @endif
              @endforeach
            
        </div>
        <!--------------End Followers--------------->

        <!--------------Start Reviews--------------->
        <br><br>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
          <div class="table-users">

               <div class="header">{{Auth::user()->name}}'s Reviews</div>
   
               <table class="table" cellspacing="0">
                  <tr class="tr">
                    <th >id</th>
                    <th width="150">Review</th>
                    <th>Created at</th>
                    <th>Post</th>
                  </tr>
                  <tr>
                     @foreach($comment as $rev)
                     @if($rev->user_id==Auth::user()->id)
                     <tr class="tr">
                        <th scope="row">{{$rev->id}}</th>
                        <td>{{$rev->body}}</td>
                        <td>{{$rev->created_at}}</td>
                        <td><a href="category/{{$rev->commentable_id}}">View Post</a></td>
                     </tr>
                    @endif
                    @endforeach
                  </tr>
                </table>
                </div>
               </div>
          <!--------------End Reviews--------------->

           <!--------------Start Gallery--------------->
        <div class="tab-pane fade" id="gallary" role="tabpanel" aria-labelledby="gallary-tab">
        <br>
          <div class="resturant eachAll" id="menu">
          <table style="overflow-x:scroll;" class="table" cellspacing="0">
                  <tr>
                     <th class="text-center">#</th>
                     <th class="text-center">Title</th>
                      <th class="text-center">Image</th>
                      <th class="text-center">Number of Color </th>
                      <th class="text-center">width</th>
                      <th class="text-center">height</th>
                      <th class="text-center">Created_at</th>
                      <!--<th class="text-center">Update</th>-->
                      <th class="text-center">Delete</th>
                  </tr>

                @php $count = 1; @endphp
                @foreach($photos as $data)
                @if($data->user_id==Auth::user()->id)
                  <tr>
                    <td class="text-center">{{$count}}</td>
                    <td class="text-center">{{$data->title}}</td>
                    <td class="text-center">
                        @php
                        $img=explode(",",$data->image);
                        @endphp
                        <img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $img[0] }}" alt="image">
                    </td>
                    <td class="text-center"> {{ $data->no_of_color }}</td>
                    <td class="text-center"> {{ $data->width }}</td>
                    <td class="text-center"> {{ $data->height }}</td>
                    <td class="text-center"> {{ $data->created_at }}</td>

                    <td class="text-center">
                                    <form method="post" action="{{ route('photos.delete', $data->id) }}">
                                    {{csrf_field()}}
                                  <button class="btn btn-info btn-sm" data-id="{{$data->id}}" data-toggle="modal" data-target="#delete-data{{$data->id}}">delete</button>
                                  <!-- Delete photo Modal -->
                                  <div class="modal modal-danger fade" id="delete-data{{$data->id}}" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                          <h4 class="modal-title text-center" id="exampleModalLabel">delete</h4>
                                        </div>
                                      
                                        <div class="modal-body">
                                          <h3 class="text-center ">Are you sure you want to delete ?</h3>                  
                                          </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-outline"  data-dismiss="modal">Cancel</button>
                                      
                                          <input type="hidden" name="_method" value="delete">

                                          <button class="btn btn-danger delete pull-right">Delete</button>
                                              </form>     
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>

                       </td>

                  </tr>
  @php $count ++; @endphp   @endif
  @endforeach
            </table>     
       </div> 
        </div>
        <br><br><br>

       
        </div>

      </div>
    </div>
</div>


<div class="container-fluid" style="margin-top: 1700px;">
</div>
@stop