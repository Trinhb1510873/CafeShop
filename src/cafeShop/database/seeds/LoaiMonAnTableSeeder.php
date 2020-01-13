<?php

use Illuminate\Database\Seeder;

class LoaiMonAnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $types = ["Thức ăn nhanh", "Món ăn", "Nước uống"];
        sort($types);
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'lma_id'      => $i,
                'lma_ten'     => $types[$i-1],
            ]);
        }
        DB::table('mst_loai_mon_an')->insert($list);
    }
}
