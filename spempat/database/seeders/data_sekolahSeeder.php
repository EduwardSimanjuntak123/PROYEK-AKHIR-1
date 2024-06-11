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
           
            'akreditas' => 'A',
            'operator' => 'Deslima Siahaan',
            'nama_kepala_sekolah' => 'Berliana Pasaribu',
            // 'jumlah_laki_laki' => 320,
            // 'jumlah_perempuan' => 344,
            // 'jumlah_tingkat_7' => 226,
            // 'jumlah_tingkat_8' => 211,
            // 'jumlah_tingkat_9' => 227,
            'tahun_ajaran' => '2024/2025',
            'user_id' => 1,

        ]);
        DB::table('data_siswa')->insert([
           
          
            'jumlah_laki_laki' => 320,
            'jumlah_perempuan' => 344,
            'jumlah_tingkat_7' => 226,
            'jumlah_tingkat_8' => 211,
            'jumlah_tingkat_9' => 227,

            'user_id' => 1,

        ]);
    }
}