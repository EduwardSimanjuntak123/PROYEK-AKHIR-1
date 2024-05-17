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
            'isi' => 'ini kata sambutan',
            'file' => 'sacasc',
            'user_id' => 2,
            
        ]);
    }
}
