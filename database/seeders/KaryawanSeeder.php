<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawan')->insert([
            [
                'nama' => 'Wonwoo',
                'posisi' => 'Boss',
                'kontak' => '027428223',
                'status' => 'Hadir',
            ]

            ]);
    }
    }

