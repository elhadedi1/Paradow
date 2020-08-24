@extends('site/layout/main')

@section('content')

        @php $countOrder=count($allor);  @endphp

@if($countOrder == 0)

<div class="orderTrack">
    <div class="container">
    
 <div clsss="ordertxt">
            <h3>Your cart is still empty.</h3>
            <img src="/website/images/emptyCart.gif" id="emptyCart">
     </div>
</div>
</div>
@endif

@if($countOrder != 0)
<div class="orderTrack">
    <div class="container">

<div clsss="ordertxt">
            <h3>Your order is on its way.</h3>
            <img src="/website/images/truck.gif" class="logoTruck">
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="reach text-center">
                    <p class="bold">How To Reach Us</p>
                    <p><i class="fa fa-phone"></i> 0101119146893</p>
                    <p><i class="fa fa-envelope"></i> paradow.me@gmail.com</p>

                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="learn text-center">
                    <p class="bold">Learn About Us</p>
                    <a href="/about"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            </div>
            <h2 class="text-center">Order Summary</h2>
<hr>
<br>

@foreach($allor as $orderr)
<div class="row" style="height: auto !important;">

<br>
    <div class="col-sm-12 col-md-6">
        <div class="summary text-center">
           
            <p class="bold">Details</p>
            <p>Order Date: {{$orderr->created_at}}</p>
            
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="shipping text-center">
            <p class="bold">Shipping Address</p>
            <p>{{$orderr->city}}</p>
            <p>{{$orderr->address}}</p>
            <p>{{$orderr->phone}}</p>
        </div>
    </div>
   
    <div class="col-sm-12">
   
    <table id="example1" class="table table-bordered" style="background-color:white;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">{{trans('main.titleImage')}}</th>
                  <th class="text-center">{{trans('main.image')}}</th>
                  <th class="text-center">{{trans('main.price')}}</th>
                </tr>
          
        </thead>
            <tbody>
       
              @php $count = 1; 
              $total=0;
              if($orderr != null){
             
            $dd=explode(',',$orderr->order);
            }
            else{
              $dd=[];
            }
            @endphp
            
              @foreach($catdetails as $data)
             @foreach($dd as $d)
            
              @if($data->id == $d)
            
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{unserialize($data->title)[LaravelLocalization::getCurrentLocale()]}}</td>
                <td class="text-center">
                <img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $data->image}}" alt="image">
                </td>
                  
                  @if($data->price !=$data->priceAfterOff && $data->priceAfterOff!=0 && $data->price !=0 )
                    <td class="text-center">{{$data->priceAfterOff}}<span style="color:red;text-decoration: line-through; padding:5px 5px;">{{$data->price}}</span></td>
                  <?php $total+=$data->priceAfterOff;?>
                   @elseif(($data->price == $data->priceAfterOff ||$data->priceAfterOff ==0) && $data->price !=0)
                   <td class="text-center">{{$data->price}}</td>
                   <?php $total+=$data->price;?>
                   @else($data->price ==0 )
                   <td class="text-center">Free</td>
                   @endif
                        </tr>

            @php $count ++; @endphp
            @endif
       @endforeach
            @endforeach
          </tbody>
        </table>
     

    </div>
    
<div class="orderData">
        <p>Tax: $20</p>
    
         <p> Order Total:{{$total+20}}</p>
       
                <a class="btn btn-info btn-sm"data-id="{{$orderr->id}}" data-toggle="modal" data-target="#delete-data{{$orderr->id}}"> Order is delivered</a>
                  <form method="post" action="{{ route('orders.delete', $orderr->id) }}">
                  {{csrf_field()}}
              
                <!-- Modal -->
                <div class="modal modal-danger fade" id="delete-data{{$orderr->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">Are you sure the order is delivered?</h3>                  
                        </div>
                      <div class="modal-footer">
                            <button type="button" class="btn btn-outline"  data-dismiss="modal">No</button>
                        
                            <input type="hidden" name="_method" value="delete">

                            <button class="btn btn-danger delete pull-right">Yes</button>
                        </div></div>
                    </div>
                      </div>
                          </form>     
                        </div>
                                          </div>
  <hr> 
@endforeach
            </div>


</div>
          @endif
   
    
    
@stop