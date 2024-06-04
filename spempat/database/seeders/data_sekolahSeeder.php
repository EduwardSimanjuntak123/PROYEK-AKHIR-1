<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class data_sekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_sekolah')->insert([
            'NPSN' => 10208505,
            'status' => 'Negeri',
            'Bentuk_kepemilikan' => 'Pemerintah',
            'Tanggal_SK_pendirian_sekolah' => '1952-01-01',
            'SK_pendirian_sekolah' => '030/AU/1979',
            'SK_ijin_operasional' => '-',
            'tanggal_SK_ijin_operasional' => '1910-01-01',
            'status_kepemilikan' => 'Pemerintah Pusat',
            'akreditas' => 'A',
            'operator' => 'Deslima Siahaan',
            'nama_kepala_sekolah' => 'Berliana Pasaribu',
            'jumlah_laki_laki' => 320,
            'jumlah_perempuan' => 344,
            'jumlah_tingkat_7' => 226,
            'jumlah_tingkat_8' => 211,
            'jumlah_tingkat_9' => 227,
            'status_BOS' => 'Aktif',
            'Waku_Penyelenggaraan' => 'Pagi',
            'Sumber_Listrik' => 'PLN',
            'Daya_Listrik' => '3200',
            'Kecepatan_Internet' => '40 Mb',
            'user_id' => 1,

        ]);
    }
}