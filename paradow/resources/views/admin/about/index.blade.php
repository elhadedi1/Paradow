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
             <table id="example1" class="table table-bordered table-striped" style="background-color:white;margin-bottom: 50px;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Header Logo</th>
                  <th class="text-center">Footer Logo</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Show Details</th>
                  <th class="text-center">Slider Image</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              @foreach($abouts as $data)
            
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">
                <img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $data->logo_header }}" alt="logo header">
                </td>
                <td class="text-center">
                <img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $data->logo_footer }}" alt="logo footer">
                </td>
                <td class="text-center"> {{ $data->email }}</td>

                <td class="text-center">
                   <a href="{{url('admin/about/'.$data->id)}}">Show Details</a>
</td>
                <td class="text-center">
                <img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $data->sldier }}" alt="slider image">
                </td>
                                    
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
         <!-- /.box-header -->
         <div class="box-body">
         <h4>Social Media Links</h4>
             <table id="example1" class="table table-bordered table-striped" style="background-color:white;margin-bottom: 50px;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Facebook Link</th>
                  <th class="text-center">Youtube Link</th>
                  <th class="text-center">Github Link</th>
                  <th class="text-center">Created_at</th>
                  <th class="text-center">Updated_at</th>
                  <th class="text-center">Update</th>
                  <th class="text-center">Delete</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              @foreach($abouts as $data)
           
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{$data->facebook_link}}</td>
                <td class="text-center"> {{ $data->youtube_link }}</td>
                <td class="text-center"> {{ $data->github_link }}</td>          
                <td class="text-center"> {{ $data->created_at }}</td>
                <td class="text-center"> {{ $data->updated_at }}</td>
                   <td class="text-center">
                 <a href="{{url('admin/about/'.$data->id.'/edit')}}" class="btn btn-primary fa fa-pencil-square-o" ></a>
               </td>
                <td class="text-center">
                  <form method="post" action="{{url('admin/about/'.$data->id)}}">
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
                        <h4 class="modal-title text-center" id="exampleModalLabel">Confirm</h4>
                      </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">Are You Sure to delete a Record</h3>                  
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

               <!-- /.box-header -->
               <div class="box-body">
         <h4>Data in About Page</h4>
             <table id="example1" class="table table-bordered table-striped" style="background-color:white;margin-bottom: 50px;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">About Title</th>
                  <th class="text-center">Show Details</th>
                  <th class="text-center">Created_at</th>
                  <th class="text-center">Updated_at</th>
                  <th class="text-center">Update</th>
                  <th class="text-center">Delete</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              @foreach($ab as $dat)
           
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{unserialize($dat->about_title)[LaravelLocalization::getCurrentLocale()]}}</td>

                <td class="text-center">
                   <a href="{{url('admin/abouts/'.$dat->id)}}">Show Details</a>
</td>               
                <td class="text-center"> {{ $dat->created_at }}</td>
                <td class="text-center"> {{ $dat->updated_at }}</td>
                   <td class="text-center">
                 <a href="{{url('admin/abouts/'.$dat->id.'/edit')}}" class="btn btn-primary fa fa-pencil-square-o" ></a>
               </td>
                <td class="text-center">
                  <form method="post" action="{{url('admin/abouts/'.$dat->id)}}">
                  {{csrf_field()}}
                <a class="btn btn-danger fa fa-trash-o"data-id="{{$dat->id}}" data-toggle="modal" data-target="#delete-data{{$dat->id}}"></a>
                <!-- Modal -->
                <div class="modal modal-danger fade" id="delete-data{{$dat->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title text-center" id="exampleModalLabel">Confirm</h4>
                      </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">Are You Sure to delete a Record</h3>                  
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

