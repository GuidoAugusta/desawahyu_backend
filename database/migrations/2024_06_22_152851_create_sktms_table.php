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
        Schema::create('sktms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('nik', 16);
            $table->string('jenis_kelamin');
            $table->string('tempat');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('ktp');
            $table->string('email');
            $table->string('status')->default('Menunggu');
            $table->string('alasan')->nullable();
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id');
            $table->string('jenis_surat')->default('Surat Keterangan Tidak Mampu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sktms');
    }
};
