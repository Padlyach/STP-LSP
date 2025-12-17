<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranSertifikat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'jenis_kelamin',
        'email',
        'telepon',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_universitas',
        'kompetensi',
        'alamat',
        'sertifikat_depan',
        'sertifikat_belakang'
    ];
}
