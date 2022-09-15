@extends('pegawai.layout')
@section('content') 
<div class="row"> 
    <div class="col-lg-12 margin-tb"> 
        <div class="pull-left mt-2"> 
            <h2><center>DATA PEGAIWAI PT. MAJU JAYA</h2> 
            <br>
        </div> 
        <div class="float-right my-2"> 
            <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Input Data</a> 
        </div> 
    </div> 
</div>

@if ($message = Session::get('success')) 
<div class="alert alert-success"> 
    <p>{{ $message }}</p> 
</div> 
@endif
<table class="table table-bordered"> 
    <tr> 
        <th>id</th> 
        <th>nama</th> 
        <th>alamat</th> 
        <th>jabatan</th>
        <th>Divisi</th>  
        <th width="280px">Action</th> 
    </tr>

    @foreach ($pegawai as $Pegawai) 
    <tr> 
        <td>{{ $Pegawai->id }}</td> 
        <td>{{ $Pegawai->nama }}</td> 
        <td>{{ $Pegawai->alamat }}</td> 
        <td>{{ $Pegawai->jabatan }}</td> 
        <td>{{ $Pegawai->divisi->nama_divisi}}</td>
        
        <td> 
        <form action="{{ route('pegawai.destroy',$Pegawai->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('pegawai.show',$Pegawai->id) }}">Show</a> 
            <a class="btn btn-primary" href="{{ route('pegawai.edit',$Pegawai->id) }}">Edit</a> 
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button> 
        </form> 
    </td> 
</tr>
@endforeach 
</table> 
@endsection