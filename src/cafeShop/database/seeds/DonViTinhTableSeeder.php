<?php

use Illuminate\Database\Seeder;

class DonViTinhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $list = [];
        $dvt = [" Kilogram (kg)", "gram (g)", "thùng", "ly", "chai", "tô", "dĩa","phần"];
        sort($dvt);
        for ($i=1; $i <= count($dvt); $i++) {
            array_push($list, [
                'dvt_id'      => $i,
                'dvt_ten'     => $dvt[$i-1],
            ]);
        }
        DB::table('mst_don_vi_tinh')->insert($list);
    }
}
