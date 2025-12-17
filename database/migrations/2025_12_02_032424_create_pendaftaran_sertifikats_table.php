<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pendaftaran_sertifikats', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nim');
        $table->string('jenis_kelamin');
        $table->string('email');
        $table->string('telepon');
        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->string('nama_universitas');
        $table->string('kompetensi');
        $table->text('alamat');
        $table->string('sertifikat_depan');
        $table->string('sertifikat_belakang');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_sertifikats');
    }
};
