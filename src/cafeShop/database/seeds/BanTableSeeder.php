<?php

use Illuminate\Database\Seeder;

class BanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_ban')->insert([
            [
                'ban_ten'       => 'Bàn 1',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 2,
                'id_tang'       => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 2',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 2,
                'id_tang'       => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 3',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 4,
                'id_tang'       => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 4',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 4,
                'id_tang'       => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 5',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 6,
                'id_tang'       => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 6',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 6,
                'id_tang'       => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 7',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 2,
                'id_tang'       => 2,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 8',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 2,
                'id_tang'       => 2,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 9',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 4,
                'id_tang'       => 2,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 10',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 4,
                'id_tang'       => 2,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 11',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 6,
                'id_tang'       => 2,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 12',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 6,
                'id_tang'       => 2,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 13',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 2,
                'id_tang'       => 3,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 14',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 2,
                'id_tang'       => 3,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 15',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 4,
                'id_tang'       => 3,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 16',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 4,
                'id_tang'       => 3,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 17',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 6,
                'id_tang'       => 3,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'ban_ten'       => 'Bàn 18',
                'ban_trangThai' => 1,
                'ban_soLuong'   => 6,
                'id_tang'       => 3,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
