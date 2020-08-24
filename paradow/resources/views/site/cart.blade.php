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
<div class="container">
<h2 class="h2 text-center">{{trans('main.myCart')}}</h2>
<div class="page-content-wrap">          
                <!-- Main content -->
    <section class="content" style="margin-top: 50px;">
      <div class="row">
        <div class="col-xs-12 col-lg-8 col-md-12 offset-lg-2">
          <div class="box">
            @include('admin.layout.includes.massage') 
          <!-- /.box-header -->

<div class="box-body">
             <table id="example1" class="table table-bordered" style="background-color:white;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">{{trans('main.titleImage')}}</th>
                  <th class="text-center">{{trans('main.image')}}</th>
                  <th class="text-center">{{trans('main.price')}}</th>
                  <th class="text-center">{{trans('main.delete')}}</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; 
              if($catdetails != null){
              $y=array($catdetails->cat_id);
            $dd=explode(',',$catdetails->cat_id);
            }
            else{
              $dd=[];
            }
            @endphp
            
              @foreach($catt as $data)
             @foreach($dd as $d)
            
              @if($data->id == $d)
            
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</td>
                <td class="text-center">
                <img class="img-responsive" style="width:100%;height:20%" src="/images/{{ $data->image}}" alt="image">
                </td>
                  
                  @if($data->price !=$data->priceAfterOff && $data->priceAfterOff!=0 && $data->price !=0 )
                    <td class="text-center">{{$data->priceAfterOff}}<span style="color:red;text-decoration: line-through; padding:5px 5px;">{{$data->price}}</span></td>
                   
                   @elseif(($data->price == $data->priceAfterOff ||$data->priceAfterOff ==0) && $data->price !=0)
                   <td class="text-center">{{$data->price}}</td>
                  
                   @else($data->price ==0 )
                   <td class="text-center">Free</td>
                   @endif
            
             
                <td class="text-center">
                  <form method="post" action="{{url('carts/'.$data->id)}}">
                  {{csrf_field()}}
                <a class="btn btn-danger"data-id="{{$data->id}}" style="    width: 62%;
    font-size: 22px;
    background-color: #c21212;
    color: white;" data-toggle="modal" data-target="#delete-data{{$data->id}}"><i class="fa fa-times"></i></a>
                <!-- Modal -->
                <div class="modal modal-danger fade" id="delete-data{{$data->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center" id="exampleModalLabel">{{trans('main.delConfirm')}}</h4>
                      </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">{{trans('main.delText')}}</h3>                  
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline"  data-dismiss="modal">{{trans('main.cancel')}}</button>
                        <input type="hidden" name="_method" value="delete">

                        <button class="btn btn-outline danger delete pull-right">{{trans('main.delete')}}</button>
                            </form>     
                      </div>
                      
                    </div>
                  </div>
                </div>

            </td>
            </tr>

            @php $count ++; @endphp
            @endif
       @endforeach
            @endforeach
          </tbody>
        </table>
       
        </div><!-- /.box-body -->

        </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

</div>

<section class="content" style="margin-top: 50px;">
      <div class="row">
        <div class="col-xs-12 col-lg-8 col-md-12 offset-lg-2">
          <div class="box">
            @include('admin.layout.includes.massage') 
          <!-- /.box-header -->

<div class="box-body">
             <table id="example1" class="table table-bordered" style="background-color:white;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">{{trans('main.quantity')}}</th>
                  <th class="text-center">{{trans('main.totalPrice')}}</th>
                  <th class="text-center">{{trans('main.orderNow')}}</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
            @php $count = 1; 
              $total=0;
                  $x=0;
              if($catdetails != null){
              $y=array($catdetails->cat_id);
            $dd=explode(',',$catdetails->cat_id);
              
           
           
            foreach($catt as $data)
            {
             foreach($dd as $d)
              {
                if($data->id == $d)
                {    $x++;
                   if($data->price !=$data->priceAfterOff && $data->priceAfterOff!=0 )
                      {
                           $total+=$data->priceAfterOff; 
                      }
                      if($data->price ==$data->priceAfterOff || $data->priceAfterOff==0)
                       {
                      $total+=$data->price; 
                    }
       
                 }
              }
            }
             }
             else{
               $x=0;
             }
              @endphp
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{$x}}</td>
                <td class="text-center">{{$total}}</td>
                    <td class="text-center">

                
<!-- Start credit modal -->
<button type="button" class="btn btn-primary orderNow" data-toggle="modal" data-target="#exampleModalCenter"> 
{{trans('main.orderNow')}}</button>
<!--<strong style="color:red;" class="strongMsg">{{trans('main.notAvaliable')}}</strong>-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="direction: ltr;">
        <h5 class="modal-title" id="exampleModalLongTitle">{{trans('main.close')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>{{trans('main.enterData')}}</h4>         
          <hr>
          <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal ml-5 mr-5" action="{{ route('order') }}"  method="post" novalidate="novalidate">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group @if($errors->has('country')) has-error @endif">

            <label for="country-name" class="col-form-label">{{trans('main.country')}}:</label>
						<input type="text" name="city" class="form-control" id="country" required placeholder="{{trans('main.country')}}">
                        <strong class="help-block">{{ $errors->first('country') }}</strong> 
          </div>
                          <div class="form-group @if($errors->has('country')) has-error @endif">

            <label for="address-name" class="col-form-label">{{trans('main.address')}}:</label>
						<input type="text" name="address" class="form-control" id="address" required placeholder="{{trans('main.address')}}">
                        <strong class="help-block">{{ $errors->first('address') }}</strong> 
          </div>      
                                   <div class="form-group @if($errors->has('country')) has-error @endif">

            <label for="phone-name" class="col-form-label">{{trans('main.phone')}}:</label>
						<input type="text" name="phone" class="form-control" id="phone"  required placeholder="{{trans('main.phone')}}">
                        <strong class="help-block">{{ $errors->first('phone') }}</strong> 
          </div>  
                   
                                          <div class="form-group @if($errors->has('country')) has-error @endif">

            <label for="notes-name" class="col-form-label">{{trans('main.notes')}}:</label>
						<input type="text" name="notes" class="form-control" id="notes"  required placeholder="{{trans('main.notes')}}">
                        <strong class="help-block">{{ $errors->first('notes') }}</strong> 
          </div>  
                      <button type="submit" class="btn btn-default">{{trans('main.completeOrder')}}</button>
                    </form>
        </div>
     
    </div>
  </div>
</div>

  <!-- End credit modal  -->
  </div>
  </div></td> 
                      </div>
                      
                    </div>
                  </div>
                </div>

            </td>
            </tr>

            @php $count ++; @endphp
        
          </tbody>
        </table>
       
        </div><!-- /.box-body -->

        </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
</div>













@stop