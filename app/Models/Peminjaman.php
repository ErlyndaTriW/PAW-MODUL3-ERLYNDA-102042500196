<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'anggota_id',
        'buku_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];

    // TODO: Definisikan relasi belongsTo ke model Anggota
    public function anggota()
    {
     return $this->belongsTO(Aanggota:: class, 'anggota_id');   
    }

    // TODO: Definisikan relasi belongsTo ke model Buku
    public function buku()
    {
     return $this->belongsTO(Buku:: class, 'buku_id');// ni ngerujuk ke kolom $fillable    
    }
}
