<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['kategori_id'=>1, 'kategori_kode'=>'BK01', 'kategori_nama'=>'Science Fiction'],
            ['kategori_id'=>2, 'kategori_kode'=>'BK02', 'kategori_nama'=>'Fantasy'],
            ['kategori_id'=>3, 'kategori_kode'=>'BK03', 'kategori_nama'=>'Sejarah'],
            ['kategori_id'=>4, 'kategori_kode'=>'BK04', 'kategori_nama'=>'Komik'],
            ['kategori_id'=>5, 'kategori_kode'=>'BK05', 'kategori_nama'=>'Religi'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
