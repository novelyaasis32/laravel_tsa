@extends('mahasiswa.layout') 
@section('content') 
<div class="container mt-5"> 
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header text-center"> 
                <h3>Tambah Data</h3>
            </div>
            <div class="card-body"> 
                @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul> 
                        @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
                @endif 
                <form method="post" action="{{ route('mahasiswa.store') }}" id="myForm">
                @csrf 
                <div class="form-group"> 
                    <label for="id">id</label> 
                    <input type="text" name="id" class="form-control" id="id" aria-describedby="id" > 
                </div>
                <div class="form-group"> 
                    <label for="nama">Nama</label> 
                    <input type="Nama" name="nama" class="form-control" id="nama" aria-describedby="nama" > </div> 
                    <div class="form-group"> 
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" > 
                    </div>
                    <div class="form-group"> 
                        <label for="jabatan">Jabatan</label> 
                        <input type="jabatan" name="jabatan" class="form-control" id="jabatan" aria-describedby="jabatan" > 
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi</label>
                        <select name="divisi" class="from-control">
                            @foreach ($divisi as $dvs)
                                <option value="{{$dvs->id}}">{{$dvs->nama_divisi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-success" href="{{ route('mahasiswa.index') }}">Back</a>
                    </div> 
                    
                    </form> 
                </div> 
            </div> 
        </div> 
    </div>
@endsection