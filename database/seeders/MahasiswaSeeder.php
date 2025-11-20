<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => 'Supriyanto',
            'nim' => 13242420027,
            'prodi' => 'Teknologi Informasi',
            'email' => 'ilham@gmail.com',
            'nohp' => 62857326329,
        ]);
    }
} 

