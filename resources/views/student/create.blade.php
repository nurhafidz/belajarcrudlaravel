@extends('layout/main')

@Section ('title','Tambah Siswa')

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
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/user')}}">Daftar Siswa</a>
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
            <h1>Tambah Siswa</h1>
            <form method="post" action="/student">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                    @error ('nama')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="NISN">NISN</label>
                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="Masukkan NISN" name="nisn" value="{{old('nisn')}}">
                    @error ('nisn')<div class="invalin-feedback">{{ $message}}</div>@enderror 
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <textarea type="text" class="form-control " id="alamat" placeholder="Masukkan Alamat" name="alamat"></textarea>
                    
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection