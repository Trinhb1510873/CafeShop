<?php

use Illuminate\Database\Seeder;

class NVLTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $ten = ["tiêu", "đường", "muối", "dưa leo", "cà chua", "gạo", "bơ", "xoài", "dâu"];
        $faker = Faker\Factory:: create('vi_VN');

        $dvt = DB::select('SELECT dvt_id FROM mst_don_vi_tinh');
        $dvtIds = [];
        foreach($dvt as $key => $value){
            $dvtIds[] = $value->dvt_id;
        }
        $kho = DB::select('SELECT k_id FROM mst_kho');
        $khoIds = [];
        foreach($kho as $key => $value){
            $khoIds[] = $value->k_id;
        }
        $nhomNVL = DB::select('SELECT nnvl_id FROM mst_nhom_nguyen_vat_lieu');
        $nhomNVLIds = [];
        foreach($nhomNVL as $key => $value){
            $nhomNVLIds[] = $value->nnvl_id;
        }

        for ($i=1; $i <= count($ten); $i++) {
            array_push($list, [
                'nvl_id'                      => $i,
                'nvl_ten'                     => $ten[$i-1],
                'nvl_tinhChat'                => $faker->text(100),
                'nvl_soLuong'                 => $faker->numberBetween(1.0, 100.0),
                'id_don_vi_tinh'              => $faker->randomElement($dvtIds),
                'id_kho'                      => $faker->randomElement($khoIds),
                'id_nhom_nvl'                 => $faker->randomElement($nhomNVLIds)
            ]);
        }
        DB::table('mst_nguyen_vat_lieu')->insert($list);
    }
}
