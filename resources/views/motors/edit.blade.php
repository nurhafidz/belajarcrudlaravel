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
        <div class="col-8">
            <h1>Edit Kendaraan Siswa</h1>
             <form method="post" action="/motors/{{$motors->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Kendaraan</label>
                    <input type="text" class="form-control @error('nama_kendaraan') is-invalid @enderror" id="nama_kendaraan" placeholder="Masukkan Nama" name="nama_kendaraan" value="{{$motors->nama_kendaraan}}">
                    @error ('nama')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nama">Pilih Siswa</label>
                    <select name="student_id" class="form-control @error('student_id') is-invalid @enderror">
                        <option selected value="{{$motors->student_id}}">{{$motors->student->nisn}} - {{$motors->student->nama}}</option>
                        @foreach ($student as $s)
                        <option  value="{{$s->id}}">{{$s->nisn}} - {{$s->nama}}</option>
                        @endforeach
                      </select>
                      @error ('student_id')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                
                <div class="form-group">
                    <label for="platno">No Polisi</label>
                    <input type="text" value="{{$motors->platno}}" class="form-control @error('platno') is-invalid @enderror" id="paltno" placeholder="Masukkan No Polisi" name="platno" value="{{old('platno')}}" >
                    @error ('platno')<div class="invalin-feedback">{{ $message}}</div>@enderror 
                </div>
                <div class="form-group">
                    <label for="warna">Warna Kendaraan</label>
                    <input type="text" class="form-control @error('warna') is-invalid @enderror" id="nisn" placeholder="Masukkan NISN" name="warna" value="{{$motors->warna}}">
                    @error ('warna')<div class="invalin-feedback">{{ $message}}</div>@enderror 
                </div>
                <button class="btn btn-primary" type="submit">Ubah Data</button>
            </form>
        </div>
    </div>
@endsection