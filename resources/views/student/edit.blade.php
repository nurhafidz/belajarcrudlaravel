@extends('layout/main')

@Section ('title','Edit Siswa')

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
                <li class="nav-item">
                 <a class="nav-link " href="{{url('/user')}}">Cari Siswa</a>
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
        <div class="col-8">
            <h1>Edit Siswa</h1>
             <form method="post" action="/student/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input hidden type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="id">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
                    @error ('nama')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="NISN">NISN</label>
                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="Masukkan NISN" name="nisn" value="{{$student->nisn}}">
                    @error ('nisn')<div class="invalin-feedback">{{ $message}}</div>@enderror 
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{$student->alamat}}">
                    @error ('alamat')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                <button class="btn btn-primary"  type="submit">Ubah Data</button>
            </form>
        </div>
    </div>
@endsection