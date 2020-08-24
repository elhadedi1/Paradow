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
                  <th class="text-center">Title in EN</th>
                  <th class="text-center">Title in AR</th>
                  <th class="text-center">Description in EN</th>
                  <th class="text-center">Description in AR</th>
                  <th class="text-center">Back</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              <td class="text-center">{{$count}}</td>   

                   @foreach($fullData1 as $fullTitle)

                <td class="text-center">{{$fullTitle}}</td>   
                @endforeach
                @foreach($fullData2 as $fullDesc)

                <td class="text-center">{{$fullDesc}}</td>   
                @endforeach
                <td class="text-center"><a href="{{url('admin/category')}}"><i class="fa fa-backward"></i></a></td>   

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

