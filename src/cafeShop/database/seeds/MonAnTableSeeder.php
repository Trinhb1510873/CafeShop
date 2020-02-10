<?php

use Illuminate\Database\Seeder;

class MonAnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $ten = ["Cơm gà","Cơm sườn", "Cơm chiên dương châu", "Mì gói xương", "Mì gói thịt", "Hủ tiếu xương","Sinh tố bơ", "Sinh tố dâu", "Nước suối", "Coca"];
        $faker = Faker\Factory:: create('vi_VN');

        $dvt = DB::select('SELECT dvt_id FROM mst_don_vi_tinh');
        $dvtIds = [];
        foreach($dvt as $key => $value){
            $dvtIds[] = $value->dvt_id;
        }

        $ntd = DB::select('SELECT ntd_id FROM mst_nhom_thuc_don');
        $ntdIds = [];
        foreach($ntd as $key => $value){
            $ntdIds[] = $value->ntd_id;
        }

        for ($i=1; $i <= count($ten); $i++) {
            array_push($list, [
                'ma_id'                      => $i,
                'ma_ten'                     => $ten[$i-1],
                'ma_dienGiai'                => $faker->paragraph(),
                'ma_giaBan'                  => $faker->numberBetween(10000, 1000000),
                'ma_giaVon'                  => $faker->numberBetween(10000, 1000000),
                'ma_mon_dac_trung'           => $faker->numberBetween(1,2),
                'ma_thay_doi_theo_thoi_gia'  => $faker->numberBetween(1,2),
                'ma_ngung_ban'               => $faker->numberBetween(1,2),
                'ma_hinh'                    => $faker->text(100),
                'id_don_vi_tinh'             => $faker->randomElement($dvtIds),
                'id_nhom_thuc_don'           => $faker->randomElement($ntdIds)
            ]);
        }
        DB::table('mst_mon_an')->insert($list);
    }
}
