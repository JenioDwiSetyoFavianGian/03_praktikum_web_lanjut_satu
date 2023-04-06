<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('profiles')->insert([
            'nim' => '2141720212',
            'nama' => 'Jenio Dwi Setyo Favian Gian',
            'jurusan' => 'D4-TI',
            'kelas' => '2H',
            'absen' => 13,
            'jk' => 'L'
        ]);
    }
}

