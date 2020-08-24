@extends('admin/layout/main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- DataTables -->
    <section class="content-header">
      <h1>Show Profile</h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/user/create')}}">أضافة مدينة جديدة</a></li>        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            @include('admin.layout.includes.massage') 
          <!-- /.box-header -->
          <div class="box-body">
           <h1>News</h1>
           <form action="{{url('admin/users/'.$test->id.'/StoreComment')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
        <div class="form-group @if($errors->has('accountImg')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">صوره القسم </label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="accountImg">
                <strong class="help-block">{{ $errors->first('accountImg') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('accountNo')) has-error @endif">
              <div class="col-md-10">
              <input type="text" class="form-control" name="accountNo" value="{{old('accountNo')}}" placeholder="الاسم ">
                <strong class="help-block">{{ $errors->first('accountNo') }}</strong> 
              </div>
                            <label for="inputEmail3" class="col-md-2 control-label">اسم المستخدم </label>
           </div>
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                اضافه  صوره للقسم جديد
              </button>
              <br>
              <br>
              <br><br>
              <br>


            </div>
          </div><!-- /.box-footer -->
        </form>
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