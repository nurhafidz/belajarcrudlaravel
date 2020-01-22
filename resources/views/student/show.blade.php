@extends('layout/main')

@Section ('title','Detail Siswa')

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
        <h1>Detail Siswa</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              
                <h3 class="card-title">{{$student->nama}}</h3>
                <h5 class="card-subtitle mb-2 text-muted">ID :{{$student->id}}</h5>
                <h5 class="card-subtitle mb-2 text-muted">NISN :{{$student->nisn}}</h5>
                <h6 class="card-text">alamat:</h6>
                <p class="card-text">{{$student->alamat}}</p>
                <a href="{{$student->id}}/edit" class="btn btn-success text-light" class="card-link">Edit</a>
                <div id='modal' class="d-inline">
                    <button class="btn btn-danger " data-toggle="modal" data-target="#exampleModal"  class="card-link">Hapus</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">PEMBERITAHUAN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{url('img/danger.svg')}}" style="height:50px;" class="mb-2" >
                                <p>Apakah Anda Ingin Mengapus data {{$student->nama}}</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">TIDAK</button>
                            <form action="{{$student->id}}" method="POST" class="d-inline">
                                {{ method_field('delete') }}
                                @csrf
                            <button type="submit" class="btn btn-danger" type="submit">YA</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
@endsection