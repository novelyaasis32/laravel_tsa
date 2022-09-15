@extends('mahasiswa.layout') 
@section('content') 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header text-center"> 
                <h3>Edit Data Mahasiswa</h3>
            </div>
            <div class="card-body"> @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul> 
                        @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div>
            @endif 
            <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->id) }}" id="myForm"> 
            @csrf 
            @method('PUT')
                <div class="form-group"> 
                    <label for="id">id</label> 
                    <input type="text" name="id" class="form-control" id="id" value="{{ $mahasiswa->id}}" aria-describedby="id" > 
                </div>
                <div class="form-group"> 
                    <label for="nama">Nama</label> 
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $mahasiswa->nama }}" aria-describedby="nama" > 
                </div>
                <div class="form-group"> 
                    <label for="kelas">Kelas</label> 
                    <input type="kelas" name="kelas" class="form-control" id="alamat" value="{{ $mahasiswa->kelas }}" aria-describedby="kelas" > 
                </div>
                <div class="form-group"> 
                    <label for="jurusan">Jurusan</label> 
                    <input type="jurusan" name="jurusan" class="form-control" id="jurusan" value="{{ $mahasiswa->jurusan }}" aria-describedby="jurusan" > 
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