@extends('admin/layout/main')

@section('content')

<ul class="breadcrumb">
  <li><a href="{{Url('admin/index')}}">Home</a></li>
  <li><a href="{{Url('admin/create')}}">Add Users</a></li>
</ul>
<div class="page-title">
  <h2 style="float:right;"><span class="fa fa-arrow-circle-o-left " style="float:right;"></span>تعديل البيانات</h2>
</div>
<div class="page-content-wrap">

  <div class="row">
    <div class="col-md-12">

      <!-- START JQUERY VALIDATION PLUGIN -->
      <div class="panel panel-default">
        <div class="panel-body">
          <h2 style="float:right;"> {{ $user->title }} تعديل بيانات</h2>
          <form style="direction:rtl;" id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/trademark/'.$user->id)}}" method="post" novalidate="novalidate">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <div class="panel-body">
              <div class="form-group @if($errors->has('title')) has-error @endif">
                <div class="col-md-10">
                  <input type="text" class="form-control" name="title" value="{{$user->title}}">
                  <strong class="help-block">{{ $errors->first('title') }}</strong>
                </div>
                <label for="inputEmail3" class="col-md-2 control-label">اسم  </label>
              </div>

              <div class="form-group @if($errors->has('pictures')) has-error @endif">
              <div class="col-md-10">
              <span class="file-input file-input-new"><div class="file-preview">
   <div class="close fileinput-remove text-right">×</div>
   <div class="file-preview-thumbnails"></div>
   <div class="clearfix"></div>   <div class="file-preview-status text-center text-success"></div>
</div>
<button type="button" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-ban-circle"></i> Remove</button>

<div class="btn btn-danger btn-file"> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … 
<input name="pictures" type="file" multiple="" id="file-simple"></div>
</span>              </div>
<label for="inputEmail3" class="col-md-2 control-label">  الصوره </label>
           
</div>  

              <div class="btn-group pull-right">
                <button class="btn btn-primary" type="submit">تعديل البيانات</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- END JQUERY VALIDATION PLUGIN -->
    </div>
  </div>
</div>
@stop