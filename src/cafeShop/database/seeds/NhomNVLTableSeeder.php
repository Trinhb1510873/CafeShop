<?php

use Illuminate\Database\Seeder;

class NhomNVLTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $list = [];
        $nhomNVL = ["Rau", "Gia Vị", "Trái cây", "Trà"];
        for ($i=1; $i <= count($nhomNVL); $i++) {
            array_push($list, [
                'nnvl_id'      => $i,
                'nnvl_ten'     => $nhomNVL[$i-1],
            ]);
        }
        DB::table('mst_nhom_nguyen_vat_lieu')->insert($list);
    }
}
