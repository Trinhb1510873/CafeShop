<?php

use Illuminate\Database\Seeder;

class ChiNhanhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_chi_nhanh')->insert([
            [
                'cn_ten'                => 'Coffee Sunflower 1',
                'cn_diachi'             => 'Cần Thơ',
                'cn_soDienThoai'        => '01234567890',
                'id_cuaHang'            => 1,
                'created_at'            => now(),
                'updated_at'            => now(),
            ],
        ]);
    }
}
