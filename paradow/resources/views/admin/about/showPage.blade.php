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
         <h4>Data in About Page</h4>
             <table id="example1" class="table table-bordered table-striped" style="background-color:white;margin-bottom: 50px;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">About Subtitle in EN</th>
                  <th class="text-center">About Subtitle in AR</th>
                  <th class="text-center">About Text in EN</th>
                  <th class="text-center">About Text in AR</th>

                  <th class="text-center">Back</th>

                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
           
              <tr>
                <td class="text-center">{{$count}}</td>  
                @foreach($fullData4 as $fullSub)

<td class="text-center">{{$fullSub}}</td>   
@endforeach
@foreach($fullData5 as $fullTxt)

<td class="text-center">{{$fullTxt}}</td>   
@endforeach
<td class="text-center"><a href="{{url('admin/about')}}"><i class="fa fa-backward"></i></a></td>   
            </tr>
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

