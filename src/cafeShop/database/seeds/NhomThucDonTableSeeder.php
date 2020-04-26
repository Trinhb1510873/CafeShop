<?php

use Illuminate\Database\Seeder;

class NhomThucDonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $ten = ["Cơm", "Hủ tiếu", "Mì" , "Nước ép", "Sinh tố" , "Nước uống đóng chai"];
        $faker = Faker\Factory:: create('vi_VN');

        $bep = DB::select('SELECT b_id FROM mst_bep');
        $lstBepIds = [];
        foreach($bep as $key => $value){
            $lstBepIds[] = $value->b_id;
        }

        $loaimonan = DB::select('SELECT lma_id FROM mst_loai_mon_an');
        $lstLoaiMonAnIds = [];
        foreach($loaimonan as $key => $value){
            $lstLoaiMonAnIds[] = $value->lma_id;
        }

        for ($i=1; $i <= count($ten); $i++) {
            array_push($list, [
                'ntd_id'        => $i,
                'ntd_ten'       => $ten[$i-1],
                'ntd_dienGiai'  => $faker->paragraph(),
                'id_bep'        => $faker->randomElement($lstBepIds),
                'id_loaiMonAn'  => $faker->randomElement($lstLoaiMonAnIds)
            ]);
        }
        DB::table('mst_nhom_thuc_don')->insert($list);
    }
}
