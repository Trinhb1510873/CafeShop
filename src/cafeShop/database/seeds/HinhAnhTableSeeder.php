<?php

use Illuminate\Database\Seeder;

class HinhAnhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_hinh_anh')->insert([
            [
                'ha_ten' => 'com-chien-duong-chau.jpg',
                'id_mon_an' => 1
            ],
            [
                'ha_ten' => 'com-ga.jpg',
                'id_mon_an' => 2
            ],
            [
                'ha_ten' => 'com-suon-1.jpg',
                'id_mon_an' => 3
            ],
            [
                'ha_ten' => 'com-suon.jpg',
                'id_mon_an' => 4
            ],
            [
                'ha_ten' => 'hu-tieu.jpg',
                'id_mon_an' => 5
            ],
            [
                'ha_ten' => 'hu-tieu-bo-vien-1.jpg',
                'id_mon_an' => 6
            ],
            [
                'ha_ten' => 'hu-tieu-bo-kho.jpg',
                'id_mon_an' => 7
            ],
            [
                'ha_ten' => 'mi-goi.jpg',
                'id_mon_an' => 8
            ],
            [
                'ha_ten' => 'mi-goi-xuong-1.jpg',
                'id_mon_an' => 9
            ],
            [
                'ha_ten' => 'nuoc-ep-dau-1.jpg',
                'id_mon_an' => 10
            ],
            [
                'ha_ten' => 'sinh-to-dau-1.jpg',
                'id_mon_an' => 11
            ],
            [
                'ha_ten' => 'sinh-to-bo.jpg',
                'id_mon_an' => 12
            ],
            [
                'ha_ten' => 'nuoc-suoi-1.jpg',
                'id_mon_an' => 13
            ],
            [
                'ha_ten' => '7-up-1.jpg',
                'id_mon_an' => 14
            ],
            [
                'ha_ten' => 'coca-cola-1.jpg',
                'id_mon_an' => 15
            ],
        ]);
    }
}
