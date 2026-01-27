<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
{
    Schema::create('pendaftaranlsps', function (Blueprint $table) {
        $table->id();
        // Data Pribadi
        $table->string('email_google')->nullable();
        $table->string('nama');
        $table->string('nik', 20); // Dibatasi 20 karakter
        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->text('alamat');
        $table->string('telepon', 20);
        $table->string('email');
    
        // Data Akademik
        $table->string('program_studi');
        $table->string('batch');
        $table->string('skema');

        // Upload Dokumen (Semua dibuat nullable agar tidak error jika user tidak upload)
        $table->string('transkrip_nilai')->nullable();
        $table->string('sertifikat_otjt')->nullable();
        $table->string('reference_letter')->nullable();
        $table->string('ktp_file')->nullable();
        $table->string('cv')->nullable();
        $table->string('kartu_mahasiswa')->nullable();
        $table->string('pas_foto')->nullable();

        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('pendaftaranlsps');
    }
};
