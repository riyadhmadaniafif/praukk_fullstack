<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeris')->insert([
            'nama' => 'Andi Riyadh Madani Afif',
            'tanggallahir' => 'Makassar, 4 Februari 2006',
            'jeniskelamin' => 'laki-laki',
            'nomortelepon' => '082187420345',
            'usia' => '17 Tahun'
        ]);
    }
}
