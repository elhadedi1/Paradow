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
                  <th class="text-center">Image</th>
                  <th class="text-center">Category Name</th>
                  <th class="text-center">Created_at</th>
                  <th class="text-center">Updated_at</th>
                  <th class="text-center">Update</th>
                  <th class="text-center">Delete</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              @foreach($feature as $data)
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{$data->description}}</td>
                <td class="text-center">
                <img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $data->image}}" alt="image">
                </td>

                <td class="text-center"> {{ $data->created_at }}</td>
                <td class="text-center"> {{ $data->updated_at }}</td>
                   <td class="text-center">
                 <a href="{{url('admin/feature/'.$data->id.'/edit')}}" class="btn btn-primary fa fa-pencil-square-o" ></a>
               </td>
                <td class="text-center">
                  <form method="post" action="{{url('admin/feature/'.$data->id)}}">
                  {{csrf_field()}}
                <a class="btn btn-danger fa fa-trash-o"data-id="{{$data->id}}" data-toggle="modal" data-target="#delete-data{{$data->id}}"></a>
                <!-- Modal -->
                <div class="modal modal-danger fade" id="delete-data{{$data->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center" id="exampleModalLabel">تأكيد الحجز</h4>
                      </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">هل انت متأكد من حذف {{$data->id}}؟</h3>                  
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline"  data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="_method" value="delete">

                        <button class="btn btn-outline danger delete pull-right">Delete</button>
                            </form>     
                      </div>
                      
                    </div>
                  </div>
                </div>

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

