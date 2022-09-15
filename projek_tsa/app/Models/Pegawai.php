<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pengunjung;

class Pengunjung extends Model
{
    protected $table="pengunjung"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'nama', 
        'asal', 
        'golongan',
        'divisi_id', 
    ];
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}
