<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kata_sambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kata_sambutan')->insert([
            'isi' => 'Pembelajaran elearning merupakan bagian dari tuntutan kemajuan teknologi dan
            komunikasi saat ini
            Melalui pembelajaran model ini diharapkan pendidik dan peserta didik dapat lebih interaktif dan
            menyenangkan.
            Alhamdulillah kita patut bersyukur, SMP Negeri 4 Balige menjadi pelopor di Kota Balige yang
            menerapkan
            pembelajaran UKBM dalam bentuk eLearning.
            Oleh karena itu, kami berharap melalui pembelajaran elearning ini SMP Negeri 4 Balige menjadi bagian
            dari
            pendidikan yang bermutu dan berkualitas.',
            'user_id' => 1
            
        ]);
    }
}