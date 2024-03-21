<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'penjualan_id'=>1,
                'user_id'=>3,
                'pembeli'=>'Dani Santosa',
                'penjualan_kode'=>'BUY001',
                'penjualan_tanggal'=>'2024-01-01 10:15:00',
            ],
            [
                'penjualan_id'=>2,
                'user_id'=>3,
                'pembeli'=>'Agnes',
                'penjualan_kode'=>'BUY002',
                'penjualan_tanggal'=>'2024-03-01 19:00:00',
            ],
            [
                'penjualan_id'=>3,
                'user_id'=>1,
                'pembeli'=>'Josh Braun',
                'penjualan_kode'=>'BUY003',
                'penjualan_tanggal'=>'2024-01-29 12:30:00',
            ],
            [
                'penjualan_id'=>4,
                'user_id'=>2,
                'pembeli'=>'Ahmad',
                'penjualan_kode'=>'BUY004',
                'penjualan_tanggal'=>'2024-02-16 11:10:00',
            ],
            [
                'penjualan_id'=>5,
                'user_id'=>2,
                'pembeli'=>'Benjamin',
                'penjualan_kode'=>'BUY005',
                'penjualan_tanggal'=>'2024-03-10 13:05:00',
            ],
            [
                'penjualan_id'=>6,
                'user_id'=>3,
                'pembeli'=>'Putri',
                'penjualan_kode'=>'BUY006',
                'penjualan_tanggal'=>'2024-01-22 10:30:00',
            ],
            [
                'penjualan_id'=>7,
                'user_id'=>2,
                'pembeli'=>'Franklyn McGillis',
                'penjualan_kode'=>'BUY007',
                'penjualan_tanggal'=>'2024-04-11 13:30:00',
            ],
            [
                'penjualan_id'=>8,
                'user_id'=>3,
                'pembeli'=>'Nadira Safitri',
                'penjualan_kode'=>'BUY008',
                'penjualan_tanggal'=>'2024-03-25 18:25:00',
            ],
            [
                'penjualan_id'=>9,
                'user_id'=>3,
                'pembeli'=>'Gaelio Bauduin',
                'penjualan_kode'=>'BUY009',
                'penjualan_tanggal'=>'2024-04-01 15:15:00',
            ],
            [
                'penjualan_id'=>10,
                'user_id'=>3,
                'pembeli'=>'Jack',
                'penjualan_kode'=>'BUY010',
                'penjualan_tanggal'=>'2024-03-01 11:15:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
