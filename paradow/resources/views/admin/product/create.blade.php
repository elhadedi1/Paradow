@extends('admin/layout/main')

@section('content')
    
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Products</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="/paradow/admin">Dashboard</a></li>
                                    <li><a href="#">products</a></li>
                                    <li class="active">Add </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
                <div class="page-content-wrap" style="display: inline list-item;">          
                <div class="row" style="margin-right:0px">
                        <div class="col-md-10" style="margin:50px;">                        
                        <h4> Add New product</h4>
              <br>
                        
                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal" action="{{url('admin/product')}}"  method="post" novalidate="novalidate">
                                    
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="panel-body">      


 
                                    

<div class="form-group row @if($errors->has('name')) has-error @endif">
  <label for="inputPassword" class="col-sm-2 col-form-label">name</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" id="name" placeholder="name" name="name">
      <strong class="help-block">{{ $errors->first('name') }}</strong> 
    </div>
  </div>
                
  <div class="form-group row @if($errors->has('price')) has-error @endif">
    <label for="price" class="col-sm-2 col-form-label">price</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="price" placeholder="price" name="price">
      <strong class="help-block">{{ $errors->first('price') }}</strong> 
    </div>
  </div>


 

  <div class="form-group row @if($errors->has('image')) has-error @endif">
    <label for="image" class="col-sm-2 col-form-label">image</label>
    <div class="col-sm-6">
      <input type="file"  class="form-control" id="image" name="image">
      <strong class="help-block">{{ $errors->first('image') }}</strong> 
    </div>
  </div>




      <div class="btn-group pull-right">
          <button class="btn btn-primary center" type="submit" style="width: 110px;position: relative;left: -485%;">Upload data</button>
      </div>  

    </div>                                    
</form>
</div></div>
                                  
  
                         
                          
                            </div>
                        </div>
                    </div>

                    @stop

