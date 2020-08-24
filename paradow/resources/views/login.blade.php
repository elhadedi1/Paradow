@extends('master')
@section('content')




<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                @foreach ($errors->all() as $err)
            <div class="alert alert-danger" role="alert" style="      margin-left: 10%;
    width: 75%;
    font-size: 16px;
    margin-top: 20px;">

                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Warning!</strong> {{ $err}}
                            </div>

           @endforeach
                <form class="form-horizontal"  action="/login" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                 
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
            
                    </form>
                </div>
            </div>
        </div>
    </div>



    @stop