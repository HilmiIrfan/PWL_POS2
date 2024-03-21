<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'stok_id'=>1,
                'barang_id'=>1,
                'user_id'=>3,
                'stok_tanggal'=>'2023-12-04 10:00:00',
                'stok_jumlah'=>40,
            ],
            [
                'stok_id'=>2,
                'barang_id'=>2,
                'user_id'=>2,
                'stok_tanggal'=>'2023-09-24 14:15:00',
                'stok_jumlah'=>60,
            ],
            [
                'stok_id'=>3,
                'barang_id'=>3,
                'user_id'=>3,
                'stok_tanggal'=>'2023-12-04 10:00:00',
                'stok_jumlah'=>33,
            ],
            [
                'stok_id'=>4,
                'barang_id'=>4,
                'user_id'=>1,
                'stok_tanggal'=>'2023-04-04 09:45:00',
                'stok_jumlah'=>45,
            ],
            [
                'stok_id'=>5,
                'barang_id'=>5,
                'user_id'=>2,
                'stok_tanggal'=>'2023-09-24 14:15:00',
                'stok_jumlah'=>48,
            ],
            [
                'stok_id'=>6,
                'barang_id'=>6,
                'user_id'=>3,
                'stok_tanggal'=>'2023-05-22 10:20:00',
                'stok_jumlah'=>50,
            ],
            [
                'stok_id'=>7,
                'barang_id'=>7,
                'user_id'=>3,
                'stok_tanggal'=>'2023-07-16 16:00:00',
                'stok_jumlah'=>55,
            ],
            [
                'stok_id'=>8,
                'barang_id'=>8,
                'user_id'=>3,
                'stok_tanggal'=>'2023-07-16 16:00:00',
                'stok_jumlah'=>50,
            ],
            [
                'stok_id'=>9,
                'barang_id'=>9,
                'user_id'=>2,
                'stok_tanggal'=>'2023-09-24 14:15:00',
                'stok_jumlah'=>60,
            ],
            [
                'stok_id'=>10,
                'barang_id'=>10,
                'user_id'=>3,
                'stok_tanggal'=>'2023-08-19 16:15:00',
                'stok_jumlah'=>54,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
