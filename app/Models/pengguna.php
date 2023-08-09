<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    // protected $table = 'pengguna';
    protected $fillable = [
     'nama',
     'alamat',
     'nomor_telepon',
     'jenis_kendaraan',
     'nomor_pelat',
     'tanggal_masuk',
     'tanggal_keluar',
     'status_pembayaran'
    ];
}
