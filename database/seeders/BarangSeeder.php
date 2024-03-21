<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'barang_id'=>1,
                'kategori_id'=>1,
                'barang_kode'=>'ABC01',
                'barang_nama'=>'The Martian',
                'harga_beli'=>50000,
                'harga_jual'=>60000,
            ],
            [
                'barang_id'=>2,
                'kategori_id'=>3,
                'barang_kode'=>'ABC02',
                'barang_nama'=>'Sejarah Eropa Zaman Renaisans',
                'harga_beli'=>70000,
                'harga_jual'=>85500,
            ],
            [
                'barang_id'=>3,
                'kategori_id'=>4,
                'barang_kode'=>'ABC03',
                'barang_nama'=>'Jujutsu Kaisen',
                'harga_beli'=>35000,
                'harga_jual'=>40000,
            ],
            [
                'barang_id'=>4,
                'kategori_id'=>5,
                'barang_kode'=>'ABC04',
                'barang_nama'=>'Kisah Nabi dan Rasul',
                'harga_beli'=>60000,
                'harga_jual'=>75000,
            ],
            [
                'barang_id'=>5,
                'kategori_id'=>2,
                'barang_kode'=>'ABC05',
                'barang_nama'=>'Hary Potter dan Batu Bertuah',
                'harga_beli'=>70000,
                'harga_jual'=>95000,
            ],
            [
                'barang_id'=>6,
                'kategori_id'=>2,
                'barang_kode'=>'ABC06',
                'barang_nama'=>'Nyanyian Achilles',
                'harga_beli'=>70000,
                'harga_jual'=>77000,
            ],
            [
                'barang_id'=>7,
                'kategori_id'=>3,
                'barang_kode'=>'ABC07',
                'barang_nama'=>'Kegagalan Palestina Menjadi Negara Merdeka',
                'harga_beli'=>70000,
                'harga_jual'=>80000,
            ],
            [
                'barang_id'=>8,
                'kategori_id'=>1,
                'barang_kode'=>'ABC08',
                'barang_nama'=>'Ready Player One',
                'harga_beli'=>60000,
                'harga_jual'=>88000,
            ],
            [
                'barang_id'=>9,
                'kategori_id'=>4,
                'barang_kode'=>'ABC09',
                'barang_nama'=>'Marvel Secret Wars',
                'harga_beli'=>40000,
                'harga_jual'=>55000,
            ],
            [
                'barang_id'=>10,
                'kategori_id'=>5,
                'barang_kode'=>'ABC10',
                'barang_nama'=>'Maaf Tuhan, Aku Hampir Menyerah',
                'harga_beli'=>50000,
                'harga_jual'=>60000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
