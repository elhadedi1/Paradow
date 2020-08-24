@extends('admin/layout/main')

@section('content')
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Basic table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
                <div class="page-content-wrap">          
                <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            @include('admin.layout.includes.massage') 
          <!-- /.box-header -->
          <div class="box-body">
             <table id="example1" class="table table-bordered table-striped" style="background-color:white;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Category Name</th>
                  <th class="text-center">Image</th>
                  <th class="text-center">Number of Color </th>
                  <th class="text-center">Price</th>
                  <th class="text-center">PriceAfterOffer</th>
                  <th class="text-center">Rate</th>
                  <th class="text-center">State</th>
                  <th class="text-center">OfferId</th>
                  <th class="text-center">Number of Favourite </th>
                  <th class="text-center">Show More </th>
                  <th class="text-center">Created_at</th>
                  <th class="text-center">Updated_at</th>
                  
                  <th class="text-center">Update</th>
                  <th class="text-center">Delete</th>
                  <th class="text-center">Add Offer</th>
                  <th class="text-center">Approve</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp

              @foreach($users as $data)
              @php
              $no_of_user=App\User::get()->count();
              $rate=round(($data->favProduct/$no_of_user)*5);
              if($rate<= 0.5)
												$rate=0.5;
              @endphp
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{$data->categoryName}}</td>
                <td class="text-center">
                @php
                $img=explode(",",$data->image);
                @endphp
                <img class="img-responsive" style="width:100px;height:70px;" src="/paradow/public/images/{{ $img[0] }}" alt="image">
                </td>
                <td class="text-center"> {{ $data->no_of_color }}</td>
       @if( $data->price == 0)
                <td class="text-center" style="color:red;">Free</td>
                @else
                <td class="text-center">{{ $data->price }}$</td>
                @endif
                <td class="text-center">{{ $data->priceAfterOff }}$</td>
                <td class="text-center">{{ $rate }} <i class="fa fa-star"></></td>

                @if( $data->state == '1')
                <td class="text-center">Special</td>
                @else
                <td class="text-center">Normal</td>
                @endif
                <td class="text-center">{{$data->offer_id}}</td>
                <td class="text-center"> {{ $data->favProduct }}</td>
                <td class="text-center">
                   <a href="{{url('admin/category/'.$data->id)}}">Show Details</a>
</td>
         
                <td class="text-center"> {{ $data->created_at }}</td>
                <td class="text-center"> {{ $data->updated_at }}</td>

               <td class="text-center">
                 <a href="{{url('admin/category/'.$data->id.'/edit')}}" class="btn btn-primary fa fa-pencil-square-o" ></a>
               </td>
                <td class="text-center">
                  <form method="post" action="{{url('admin/category/'.$data->id)}}">
                  {{csrf_field()}}
                  @if($data->id !=1)
                  <a class="btn btn-danger fa fa-trash-o"data-id="{{$data->id}}" data-toggle="modal" data-target="#delete-data{{$data->id}}"></a>
                    @endif
                <!-- Modal -->
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
               
            <td class="text-center">
                   <form method="post" action="{{url('admin/category/'.$data->id.'/editOffer')}}">
                  {{csrf_field()}}
                <a class="btn btn-info fa fa-pencil-square-o" data-toggle="modal" data-target="#offer{{$data->id}}"></a>
                <!-- Modal -->
               <div class="modal modal-info fade" id="offer{{$data->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center" id="exampleModalLabel">add offer to price</h4>
                      </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">Are you sure you want to add offer to {{$data->categoryName}}؟</h3>                  
                        </div>
                      <div class="modal-footer">
                      <select class="form-control" id="select" name="offer">
                                  
                                  @foreach($offer as $data2)
                                       <option value="{{$data2->offer}}">{{$data2->offer}}</option>
   
                                  @endforeach
                                  <option value="0">0</option>
                       </select>

                        <button type="button" class="btn btn-outline"  data-dismiss="modal">Cancel</button>
                     
                        <input type="hidden" name="_method" value="PUT">

                        <button class="btn btn-primary delete pull-right">Add</button>
                            </form>     
                            </div>
                      
                      </div>
                    </div>
                  </div>
               </td>

               <td>
            
           
                         @if($data->id!=1)
                        @if($data->is_approved == 0)
                              <a class="btn btn-primary" href="{{url('/')}}/admin/category/{{$data->id}}/approve">Approve</a>
                          @else 
                              <a class="btn btn-info" style="color: #fff;" href="{{url('/')}}/admin/category/{{$data->id}}/hidePost">Hide</a>
                          @endif
                          @endif
                      </td>
             
            </tr>

            @php $count ++; @endphp
         
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
<!-- /.content -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop

