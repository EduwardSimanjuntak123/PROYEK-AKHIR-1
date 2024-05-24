<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class about_usSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([
            'email' => 'smpn4@gmail.com',
            'alamat' => 'soposurung,balige',
            'no_telepon' => '0812-3512-3445',
            'user_id' => 1,
        ]);
    }
}
