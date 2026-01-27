<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaranlsp extends Model
{
    use HasFactory;

    protected $table = 'pendaftaranlsps';

    protected $fillable = [
    'email_google', 'nama', 'nik', 'tempat_lahir', 'tanggal_lahir', 
    'alamat', 'telepon', 'email', 'program_studi', 'batch', 'skema',
    'transkrip_nilai', 'sertifikat_otjt', 'reference_letter', 
    'ktp_file', 'cv', 'kartu_mahasiswa', 'pas_foto'
];
}
