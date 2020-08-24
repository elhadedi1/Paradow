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
                  <th class="text-center">Name</th>
                  <th class="text-center">price</th>
                  <th class="text-center">Image</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              @foreach($product as $data)
            
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">
                {{ $data->name }}
                </td>
                <td class="text-center">
                {{ $data->price }}
                </td>
           

                <td class="text-center">
                   <a href="{{url('admin/product/'.$data->id)}}">Show Details</a>
</td>
                <td class="text-center">
                <img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $data->image }}" alt=" image">
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
        

           
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.content -->

</div><!-- /.content-wrapper -->
@stop

