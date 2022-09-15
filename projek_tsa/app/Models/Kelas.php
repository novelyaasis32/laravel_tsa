<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table='Kelas'; //mendafinisikan bahwa model ini terkait dengan tabel divisi

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);

    }
}
