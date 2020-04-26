<?php

use Illuminate\Database\Seeder;

class UsersNhanVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trn_user_nhanvien')->insert([
            [
                'id_nhan_vien' => 1,
                'id_user' => 1,
            ],
            [
                'id_nhan_vien' => 2,
                'id_user' => 2,
            ],
            
        ]);
    }
}
