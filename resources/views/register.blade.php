@extends('layout')
<head>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
@section('title')
Register
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-between">

        <div class="col-md-5">
            <img src="{{asset('Sign up-amico.png')}}" alt="" class="img-fluid">
        </div>

        <div class="col-md-5 mt-4 content">

            <form action="{{url('register')}}" method="post">
                @if($errors->any())
                @foreach ($errors->all() as $error)
                <div class="bg-danger">{{$error}}</div>
                @endforeach
                @endif
                @csrf
                <h4 class="mt-3 mb-4 text-center">Register</h4>
                <input type="text" name="name"  class="form form-control mt-3" placeholder="Name">
                <input type="email" name="email" class="form form-control mt-3" placeholder="Email">
                <input type="password" name="password" class="form form-control mt-3" placeholder="Password">
                <input type="password" name="password_confirmation" class="form form-control mt-3" placeholder="Confirmation Password">
                <input type="submit" value="Register" class="btn btn-primary mt-3">

            </form>
        </div>

    </div>
    </div>
@endsection

