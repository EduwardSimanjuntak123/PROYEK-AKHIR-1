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
        Schema::create('data_sekolah', function (Blueprint $table) {
            $table->id();
            $table->char('akreditas')->nullable();
            $table->string('operator')->nullable();
            $table->string('nama_kepala_sekolah')->nullable();
            $table->string('tahun_ajaran')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_laki_laki')->nullable();
            $table->integer('jumlah_perempuan')->nullable();
            $table->integer('jumlah_tingkat_7')->nullable();
            $table->integer('jumlah_tingkat_8')->nullable();
            $table->integer('jumlah_tingkat_9')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sekolah');
        Schema::dropIfExists('data_siswa');
    }
};