@extends('site/layout/main')

@section('content')
@include('admin.layout.includes.massage')
<br>
<br>
<form method="post" action="/forgot" enctype="multipart/form-data" style="background:none">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

						<input type="email" name="email" placeholder="{{trans('main.email')}}">
<br>
                        <button class="login" id="forgot">{{trans('main.register')}}</button>
</form>
<br>
@stop