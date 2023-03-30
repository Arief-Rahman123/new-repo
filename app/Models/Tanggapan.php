<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapans';
    protected $primaryKey = 'id_tanggapan';
    protected $fillable = ['tanggal_tanggapan', 'tanggapan'];

    public function pengaduan(){
        return $this->belongsTo(Pengaduan::class, 'id_pengaduan', 'id_pengaduan');
    }

    public function petugas(){
        return $this->belongsTo(Petugas::class, 'id_petugas', 'id_petugas');
    }
}
