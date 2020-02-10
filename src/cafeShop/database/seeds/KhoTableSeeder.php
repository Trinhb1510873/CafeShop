<?php

use Illuminate\Database\Seeder;

class KhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $kho = ["kho 1", "kho 2", "kho 3"];
        $faker = Faker\Factory:: create('vi_VN');

        for ($i=1; $i <= count($kho); $i++) {
            array_push($list, [
                'k_id'      => $i,
                'k_ten'     => $kho[$i-1],
                'k_diaChi'  => $faker->text(20),
            ]);
        }
        DB::table('mst_kho')->insert($list);
    }
}
