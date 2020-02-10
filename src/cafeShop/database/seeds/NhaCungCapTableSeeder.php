<?php

use Illuminate\Database\Seeder;

class NhaCungCapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $ncc = ["NCC gạo", "NCC rau", "NCC nước", "NCC thịt", "NCC trái cây"];
        $faker = Faker\Factory:: create('vi_VN');
        $diaChiIds = ["Cần thơ", "Sóc Trăng", "Cà Mau"];
        $sdt = ['0963594847', '0327273290','0845527711'];
        for ($i=1; $i <= count($ncc); $i++) {
            array_push($list, [
                'ncc_id'      => $i,
                'ncc_ten'     => $ncc[$i-1],
                'ncc_diachi'  =>$faker->randomElement($diaChiIds),
                'ncc_sdt'     =>$faker->randomElement($sdt)
            ]);
        }
        DB::table('mst_nha_cung_cap')->insert($list);
    }
}
