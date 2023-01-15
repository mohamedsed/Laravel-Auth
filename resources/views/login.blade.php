@extends('layout')
<head>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
@section('title')
Login
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-between">



<div class="col-md-4 mt-5 mb-5 pt-3 content">
<form action="{{url('login')}}" method="post">
    @if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
    @csrf
    <h4 class="mt-4 text-center">Login</h4>
    <input type="email" name="email" class="form form-control mt-5" placeholder="Email">
    <input type="password" name="password" class="form form-control mt-3" placeholder="Password">
    <input type="submit" value="Login" class="btn btn-primary mt-3">
</form>
</div>

    <div class="col-md-5">
       <img src="{{asset('Lo-fi concept-rafiki.png')}}" alt="" class="img-fluid">
    </div>
</div>
</div>

@endsection

