@extends('pegawai.layout') 
@section('content') 
<div class="container mt-5"> 
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header text-center"> 
                <h3>Detail Pegawai</h3>
            </div>
            <div class="card-body"> 
                <ul class="list-group list-group-flush"> 
                    <li class="list-group-item"><b>Id: </b>{{$Pegawai->id}}</li> 
                    <li class="list-group-item"><b>Nama: </b>{{$Pegawai->nama}}</li> 
                    <li class="list-group-item"><b>Alamat: </b>{{$Pegawai->alamat}}</li> 
                    <li class="list-group-item"><b>Jabatan: </b>{{$Pegawai->jabatan}}</li> 
                    <li class="list-group-item"><b>Divisi: </b>{{$Pegawai->divisi->nama_divisi}}</li>
                </ul> 
            </div>
            <a class="btn btn-success mt-3" href="{{ route('pegawai.index') }}">Kembali</a> 
        </div> 
    </div> 
</div>
@endsection