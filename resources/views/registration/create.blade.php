
@extends('layout/main2')
 
@section('content')

<div class="container-login100" style="background-image: url({{url('img/bg1.png')}});">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
    <h2 class="text-center">Register</h2>
    
    <form method="POST" class="login100-form validate-form" action="/register">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <div class="form-group" >
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</div>
 
@endsection