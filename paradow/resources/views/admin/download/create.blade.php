@extends('admin/layout/main')

@section('content')
    
        <ul class="breadcrumb">
                    <li><a href="{{Url('admin')}}">الصفحه الرئيسيه</a></li>
                    <li><a href="{{Url('admin/trademark/create')}}">اضافه علامه تجاريه جديده</a></li>
                </ul>
                <div class="page-title">                    
                    <h2 style="float:right;"><span class="fa fa-arrow-circle-o-left " style="float:right;"></span>اضافه علامه تجاريه جديد</h2>
                </div>
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">                        

                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form style="direction:rtl;" id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/download')}}"  method="post" novalidate="novalidate">
                                    
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="panel-body">    
                                    @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)                                
                                    <div class="form-group @if($errors->has('text_en')) has-error @endif">
              <div class="col-md-10">
              <input type="text" class="form-control" name="text_en[{{$key}}]" placeholder="{{$value['name']}}">
                <strong class="help-block">{{ $errors->first('text_en') }}</strong> 
              </div>
                            <label for="inputEmail3" class="col-md-2 control-label">اسم  </label>
           </div>
          

    
           @endforeach
           <div class="form-group @if($errors->has('image')) has-error @endif">
              <div class="col-md-10">
              <span class="file-input file-input-new"><div class="file-preview">
   <div class="close fileinput-remove text-right">×</div>
   <div class="file-preview-thumbnails"></div>
   <div class="clearfix"></div>   <div class="file-preview-status text-center text-success"></div>
</div>
<button type="button" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-ban-circle"></i> Remove</button>

<div class="btn btn-danger btn-file"> <i class="glyphicon glyphicon-folder-open"></i> &nbsp;Browse … 
<input name="image" type="file" multiple="" id="file-simple"></div>
</span>              </div>
<label for="inputEmail3" class="col-md-2 control-label">  الصوره </label>
           
</div>                                                           
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-primary" type="submit">اضافه</button>
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
