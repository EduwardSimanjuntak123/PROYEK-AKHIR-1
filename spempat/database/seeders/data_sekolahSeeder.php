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
            'NPSN' => 3333333,
            'status' => 'Negeri',
            'Bentuk_kepemilikan' => 'pemerintah',
            'Tanggal_SK_pendirian_sekolah' => '2024-03-05',
            'SK_pendirian_sekolah' => '10/sp/vf/34/2024',
            'SK_ijin_operasional' => '15/sp/vf/34/2024',
            'tanggak_SK_ijin_operasional' => '2020-03-01',
            'status_kepemilikan' => 'punyakku',
            'akreditas' => 'A',
            'operator' => 'eduward',
            'nama_kepala_sekolah' => 'salsa',
            'jumlah_laki_laki' => 74,
            'jumlah_perempuan' => 12,
            'jumlah_tingkat_7' => 12,
            'jumlah_tingkat_8' => 11,
            'jumlah_tingkat_9' => 10,
            'status_BOS' => 'korupsi',
            'Waku_Penyelenggaraan' => 'pagi',
            'Sumber_Listrik' => 'rumah terdekat',
            'Daya_Listrik' => '12watt',
            'Kecepatan_Internet' => '10mbps',
            'user_id' => 2,
            
        ]);
    }
}
