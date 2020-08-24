@extends('admin/layout/main')

@section('content')
<br>
                <div class="page-title">       
                <h2 style="float:right;"><span class="fa fa-arrow-circle-o-left " style="float:right;"></span> تواصل المستخدمين معنا </h2>
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
             <table id="example1" class="table table-bordered table-striped" style="background-color:white; direction:rtl;" >
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">اسم العميل</th>
                  <th class="text-center">البريد الاليكتروني</th>
                  <th class="text-center">رقم الهاتف</th>
                  <th class="text-center">عنوان العميل</th>
                  <th class="text-center">عنوان الرساله</th>
                  <th class="text-center">محتوي الرساله</th>
                  <th class="text-center">انشأ في</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              <tr>
                <td class="text-center">{{$count}}</td>
                <td class="text-center">{{$notification->data['name']}}</td>
                <td class="text-center">{{$notification->data['email']}}</td>
                <td class="text-center">{{$notification->data['body']}}</td>
                <td class="text-center">{{$notification->created_at}}</td>                  
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