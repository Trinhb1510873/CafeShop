<?php

use Illuminate\Database\Seeder;

class CuaHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('mst_cua_hang')->insert([
            [
                'ch_ten'                => 'Coffee Sunflower',
                'ch_tenNguoiDaiDien'    => 'Trần Thị Tuyết Trinh',
                'ch_diaChi'             => 'Cần Thơ',
                'ch_soDienThoai'        => '01234567890',
                'ch_maSoThue'           => '9876543210',
                'created_at'            => now(),
                'updated_at'            => now(),
            ],
        ]);
    }
}
