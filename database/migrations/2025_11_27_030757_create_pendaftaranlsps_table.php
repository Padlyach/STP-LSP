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
            $table->string('nama');
            $table->string('nisn');
            $table->string('email');
            $table->string('telepon');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('sekolah_asal');
            $table->string('kompetensi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftaranlsps');
    }
};
