@extends('layout/main')

@Section ('title','Daftar Siswa')

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">MY Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="{{url('/student')}}">Daftar Siswa</a>
            </li>
            <li class="nav-item">
             <a class="nav-link " href="{{url('/user')}}">Cari Siswa</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="{{url('/motors')}}">Daftar Kendaraan</a>
       </li>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            
          <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('/logout')}}">LogOut</a>
        </form>
        </div>
    </nav>
@endsection 

@section('content')
    <div class="container mt-5">
        <h1>Daftar Kendaraan Siswa</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Warna</th>
                
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($motors as $m)
              <tr> 
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$m->nama_kendaraan}}</td>
              <td>{{$m->warna}}</td>
              
              <td>
                <a href="/motors/{{$m->id}}" class="btn btn-success">detail</a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="/motors/create"  type="button" class="btn btn-primary">Tambah Kendaraan Siswa</a>
    </div>
@endsection