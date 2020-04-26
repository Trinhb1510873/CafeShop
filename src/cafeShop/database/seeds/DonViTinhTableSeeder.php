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
        $dvt = [" Kilogram (kg)", "chai", "dĩa", "gram (g)", "hộp", "thùng", "Tô","phần","Lon","Ly"];
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
