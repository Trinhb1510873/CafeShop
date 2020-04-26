<?php

use Illuminate\Database\Seeder;

class ChucVuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_chuc_vu')->insert([
            [
                'cv_ten' => 'Giám đốc'
            ],
            [
                'cv_ten' => 'Nhân viên kho'
            ],
            [
                'cv_ten' => 'Nhân viên phục vụ'
            ],
            [
                'cv_ten' => 'Nhân viên bếp'
            ]
        ]);
        
    }
}
