@extends('layout/main')

@Section ('title','home')

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">MY Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('/student')}}">Daftar Siswa</a>
            </li>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            
            <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('/logout')}}">LogOut</a>
        </form>
        </div>
    </nav>
@endsection 

@section('content')
    
        <img src="{{url('img/bg2.jpg')}}" alt="Snow" style="width:100%;">
       
        <div class="centered text-center" >
            <h1 class="text-light">Selamat datang</h1>
            <h1 class="text-light">{{auth()->user()->name}}</h1>
        </div>
    
@endsection