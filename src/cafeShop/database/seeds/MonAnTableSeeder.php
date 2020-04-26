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
//        $list = [];
//        $ten = ["Cơm gà","Cơm sườn", "Cơm chiên dương châu", "Mì gói xương", "Mì gói thịt", "Hủ tiếu xương","Sinh tố bơ", "Sinh tố dâu", "Nước suối", "Coca"];
//        $faker = Faker\Factory:: create('vi_VN');
//
//        $dvt = DB::select('SELECT dvt_id FROM mst_don_vi_tinh');
//        $dvtIds = [];
//        foreach($dvt as $key => $value){
//            $dvtIds[] = $value->dvt_id;
//        }
//
//        $ntd = DB::select('SELECT ntd_id FROM mst_nhom_thuc_don');
//        $ntdIds = [];
//        foreach($ntd as $key => $value){
//            $ntdIds[] = $value->ntd_id;
//        }
//
//        for ($i=1; $i <= count($ten); $i++) {
//            array_push($list, [
//                'ma_id'                      => $i,
//                'ma_ten'                     => $ten[$i-1],
//                'ma_dienGiai'                => $faker->paragraph(),
//                'ma_giaBan'                  => $faker->numberBetween(10000, 1000000),
//                'ma_giaVon'                  => $faker->numberBetween(10000, 1000000),
//                'ma_mon_dac_trung'           => $faker->numberBetween(1,2),
//                'ma_thay_doi_theo_thoi_gia'  => $faker->numberBetween(1,2),
//                'ma_ngung_ban'               => $faker->numberBetween(1,2),
//                'ma_hinh'                    => $faker->text(100),
//                'id_don_vi_tinh'             => $faker->randomElement($dvtIds),
//                'id_nhom_thuc_don'           => $faker->randomElement($ntdIds)
//            ]);
//        }
//        DB::table('mst_mon_an')->insert($list);
        DB::table('mst_mon_an')->insert([
            [
                'ma_ten' => 'Cơm xào',
                'ma_giaBan' => '25000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'com-chien-duong-chau-1.jpg',
                'id_don_vi_tinh' => 6,
                'id_nhom_thuc_don' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Cơm gà',
                'ma_giaBan' => '25000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'com-ga.jpg',
                'id_don_vi_tinh' => 6,
                'id_nhom_thuc_don' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Cơm sườn bì',
                'ma_giaBan' => '25000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'com-suon.jpg',
                'id_don_vi_tinh' => 6,
                'id_nhom_thuc_don' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Cơm sườn ram',
                'ma_giaBan' => '25000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'com-suon-ram-1.jpg',
                'id_don_vi_tinh' => 6,
                'id_nhom_thuc_don' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Hủ tiếu xương',
                'ma_giaBan' => '30000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'hu-tieu-1.jpg',
                'id_don_vi_tinh' => 8,
                'id_nhom_thuc_don' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Hủ tiếu viên',
                'ma_giaBan' => '30000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'hu-tieu.-bo-vien.jpg',
                'id_don_vi_tinh' => 8,
                'id_nhom_thuc_don' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Hủ tiếu bò kho',
                'ma_giaBan' => '30000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'hu-tieu-bo-kho-1.jpg',
                'id_don_vi_tinh' => 8,
                'id_nhom_thuc_don' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Mì gói thịt',
                'ma_giaBan' => '25000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'mi-goi-xuong-1.jpg',
                'id_don_vi_tinh' => 8,
                'id_nhom_thuc_don' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Mì gói xương',
                'ma_giaBan' => '30000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'mi-goi.jpg',
                'id_don_vi_tinh' => 8,
                'id_nhom_thuc_don' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Nước ép dâu',
                'ma_giaBan' => '25000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'nuoc-ep-dau.jpg',
                'id_don_vi_tinh' => 10,
                'id_nhom_thuc_don' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Sinh tố dâu',
                'ma_giaBan' => '25000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'sinh-to-dau.jpg',
                'id_don_vi_tinh' => 10,
                'id_nhom_thuc_don' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Sinh tố bơ',
                'ma_giaBan' => '25000',
                'ma_giaVon' => '20000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'sinh-to-bo-1.jpg',
                'id_don_vi_tinh' => 10,
                'id_nhom_thuc_don' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Nước suối',
                'ma_giaBan' => '8000',
                'ma_giaVon' => '6000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'nuoc-suoi.jpg',
                'id_don_vi_tinh' => 2,
                'id_nhom_thuc_don' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => '7-up',
                'ma_giaBan' => '8000',
                'ma_giaVon' => '6000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => '7-up.png',
                'id_don_vi_tinh' => 9,
                'id_nhom_thuc_don' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ma_ten' => 'Coca-cola',
                'ma_giaBan' => '8000',
                'ma_giaVon' => '6000',
                'ma_mon_dac_trung' => 1,
                'ma_thay_doi_theo_thoi_gia' =>1,
                'ma_ngung_ban' => 1,
                'ma_hinh' => 'coca-cola.jpg',
                'id_don_vi_tinh' => 9,
                'id_nhom_thuc_don' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
        
    }
}
