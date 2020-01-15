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
            <li class="nav-item active">
            <a class="nav-link" href="{{url('/student')}}">Daftar Siswa</a>
            </li>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LogOut</button>
        </form>
        </div>
    </nav>
@endsection 

@section('content')
    <div class="container mt-5">
        <h1>Daftar Siswa</h1>
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
                <th scope="col">NISN</th>
                <th scope="col">Alamat</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $s)
              <tr> 
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$s->nama}}</td>
              <td>{{$s->nisn}}</td>
              <td>{{$s->alamat}}</td>
              <td>
                  <a href="/student/1" class="btn btn-success">edit</a>
                  <a href="#" class="btn btn-danger">hapus</a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="/student/create"  type="button" class="btn btn-primary">Tambah Siswa</a>
    </div>
@endsection