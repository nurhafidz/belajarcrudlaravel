@extends('layout.main')

@Section ('title','User')

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
            <li class="nav-item">
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
    <h1>Cari Siswa</h1>
    @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table table-striped " id="users-table" style=" ">
            <thead class="thead-dark">
                <tr>
                    <th class="th-sm">No</th>
                    <th class="th-sm">Name</th>
                    <th class="th-sm">NISN</th>
                    <th class="th-sm">Alamat</th>
                    <th class="th-sm">Keterangan</th>
                </tr>
            </thead>
        </table>
    @stop

    @push('scripts')
    
        <script >
        $(function() {
                
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'user/json',
                
                columns: [
                    {"data": "id",
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    { data: 'nama', name: 'nama' },
                    { data: 'nisn', name: 'nisn' },
                    { data: 'alamat', name: 'alamat'},
                    { data: null,
                            render: function(data){
                                var view_button = '<a href="/student/' + data.id + '" class="btn btn-primary" role="button" aria-pressed="true">Detail</a>';
                            
                                return view_button;}
                        },
                ]
            });
           
        });
        </script>
    <a href="/student/create"  type="button" class="btn btn-primary">Tambah Siswa</a>
</div>

@endpush