@extends('site/layout/main')
@section('content')
@include('user.users',['users' => $users])
@endsection 