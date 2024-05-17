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
            $table->integer('NPSN')->nullable();
            $table->string('status')->nullable();
            $table->string('Bentuk_kepemilikan')->nullable();
            $table->date('Tanggal_SK_pendirian_sekolah')->nullable();
            $table->string('SK_pendirian_sekolah')->nullable();
            $table->string('SK_ijin_operasional')->nullable();
            $table->date('tanggak_SK_ijin_operasional')->nullable();
            $table->string('status_kepemilikan')->nullable();
            $table->char('akreditas')->nullable();
            $table->string('operator')->nullable();
            $table->string('nama_kepala_sekolah')->nullable();
            $table->integer('jumlah_laki_laki')->nullable();
            $table->integer('jumlah_perempuan')->nullable();
            $table->integer('jumlah_tingkat_7')->nullable();
            $table->integer('jumlah_tingkat_8')->nullable();
            $table->integer('jumlah_tingkat_9')->nullable();
            $table->string('status_BOS')->nullable();
            $table->string('Waku_Penyelenggaraan')->nullable();
            $table->string('Sumber_Listrik')->nullable();
            $table->string('Daya_Listrik')->nullable();
            $table->string('Kecepatan_Internet')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sekolah');
    }
};
