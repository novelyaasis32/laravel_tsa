@extends('mahasiswai.layout') 
@section('content') 
<div class="container mt-5"> 
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header text-center"> 
                <h3>Detail Mahasiswa</h3>
            </div>
            <div class="card-body"> 
                <ul class="list-group list-group-flush"> 
                    <li class="list-group-item"><b>Id: </b>{{$Mahasiswa->id}}</li> 
                    <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->nama}}</li> 
                    <li class="list-group-item"><b>Kelas: </b>{{$Mahasiswa->kelas}}</li> 
                    <li class="list-group-item"><b>Jurusan: </b>{{$Mahasiswa->jurusan}}</li> 
                </ul> 
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a> 
        </div> 
    </div> 
</div>
@endsection