<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $mahasiswa = mahasiswa::with('kelas')->get();
        $paginate = mahasiswa::orderBy('id_mahasiswa', 'asc')->paginate(6); 
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa, 'paginate'=>$paginate]);

    }
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $request)
    {
    //melakukan validasi data
    $request->validate([
    'Nim' => 'required',
    'Nama' => 'required',
    'Kelas' => 'required',
    'Jurusan' => 'required',
    ]);
    //fungsi eloquent untuk menambah data
    Mahasiswa::create($request->all());

    //jika data berhasil ditambahkan, akan kembali ke halaman utama
    return redirect()->route('mahasiswa.index')
    ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
    public function show($Nim)
    {
        $Mahasiswa = DB::table('mahasiswa')->where('nim', $nim)->first();;
 return view('mahasiswa.edit', compact('Mahasiswa'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //melakukan validasi data
 $request->validate([
    'Nim' => 'required',
    'Nama' => 'required',
    'Kelas' => 'required',
    'Jurusan' => 'required',
    ]);
   //fungsi eloquent untuk mengupdate data inputan kita
    Mahasiswa::find($Nim)->update($request->all());
   //jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect()->route('mahasiswa.index')
    ->with('success', 'Mahasiswa Berhasil Diupdate');
    }
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data
    Mahasiswa::find($Nim)->delete();
    return redirect()->route('mahasiswa.index')
    -> with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
