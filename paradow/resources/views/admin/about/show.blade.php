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
                  <th class="text-center">Address in EN</th>
                  <th class="text-center">Address in AR</th>
                  <th class="text-center">Phone in EN</th>
                  <th class="text-center">Phone in AR</th>
                  <th class="text-center">About Footer in EN</th>
                  <th class="text-center">About Footer in AR</th>
                  <th class="text-center">Back</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp            
              <tr>
              <td class="text-center">{{$count}}</td>   
              @foreach($fullData1 as $fullAdd)

<td class="text-center">{{$fullAdd}}</td>   
@endforeach

@foreach($fullData3 as $fullPhone)

<td class="text-center">{{$fullPhone}}</td>   
@endforeach
@foreach($fullData2 as $fullFooter)

<td class="text-center">{{$fullFooter}}</td>   
@endforeach
<td class="text-center"><a href="{{url('admin/about')}}"><i class="fa fa-backward"></i></a></td>   
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
<!-- /.content -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop

