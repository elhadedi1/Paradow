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
                  <th class="text-center">Name</th>
                  <th class="text-center">Profile Picture</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Role</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">City</th>
                  <th class="text-center">Credit Number</th>
                  <th class="text-center">Created_at</th>
                  <th class="text-center">Updated_at</th>
                  <th class="text-center">Update</th>
                  <th class="text-center">Delete</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              @foreach($users as $data)
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{$data->name}}</td>
                <td class="text-center">
                <img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $data->photo }}" alt="Profile Picture">
                </td>
                        <td class="text-center"> {{ $data->email }}</td>

                @if( $data->role == '1')
                <td class="text-center">مدير</td>
                @else
                <td class="text-center">مستخدم</td>
                @endif
                <td class="text-center"> {{ $data->phone }}</td>
                <td class="text-center"> {{ $data->city }}</td>
                <td class="text-center"> {{ $data->creditNo }}</td>
                <td class="text-center"> {{ $data->created_at }}</td>
                <td class="text-center"> {{ $data->updated_at }}</td>
                   <td class="text-center">
                 <a href="{{url('admin/users/'.$data->id.'/edit')}}" class="btn btn-primary fa fa-pencil-square-o" ></a>
               </td>
               @if( $data->id >'1')

                <td class="text-center">
                  <form method="post" action="{{url('admin/users/'.$data->id)}}">
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
                        <h3 class="text-center ">هل انت متأكد من حذف {{$data->name}}؟</h3>                  
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline"  data-dismiss="modal">الغاء</button>
                        <input type="hidden" name="_method" value="delete">

                        <button class="btn btn-outline danger delete pull-right">حذف</button>
                            </form>     
                      </div>
                      
                    </div>
                  </div>
                </div>

            </td>
            @endif

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