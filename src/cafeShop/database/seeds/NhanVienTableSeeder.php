<?php

use Illuminate\Database\Seeder;

class NhanVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_nhan_vien')->insert([
            [
                'nv_hoTen'      => 'Trần Thị Tuyết Trinh',
                'nv_ngaySinh'   => '1996/10/15',
                'nv_gioiTinh'   => 1,
                'nv_diaChi'     => '01234567890',
                'nv_sdt'        => '9876543210',
                'nv_email'      => 'trinh@gmail.com',
                'nv_so_cmnd'    => '123456',
                'nv_so_tk_the'  => '123456',
                'nv_trang_thai' => 1,
                'id_chuc_vu'    => 1,
                'id_bo_phan'    => 1,
                'id_chi_nhanh'  => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'nv_hoTen'      => 'Nguyen Van A',
                'nv_ngaySinh'   => '1996/10/15',
                'nv_gioiTinh'   => 2,
                'nv_diaChi'     => '01234567890',
                'nv_sdt'        => '9876543210',
                'nv_email'      => 'a@gmail.com',
                'nv_so_cmnd'    => '123456',
                'nv_so_tk_the'  => '123456',
                'nv_trang_thai' => 1,
                'id_chuc_vu'    => 1,
                'id_bo_phan'    => 1,
                'id_chi_nhanh'  => 1,
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
