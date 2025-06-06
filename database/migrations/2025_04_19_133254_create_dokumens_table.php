<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokumen');
            $table->string('nama_nasabah');
            $table->decimal('nomor_dokumen', 50, 0)->unique();
            $table->text('deskripsi');
            $table->integer('id_jenis');
            $table->string('file_path');
            $table->date('tgl_upload');
            $table->integer('id_user');
            $table->string('verifikasi_dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};
