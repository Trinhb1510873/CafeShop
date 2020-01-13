<?php

use Illuminate\Database\Seeder;

class BepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $types = ["Bếp 1", "Bếp 2", "Bếp 3", "Bếp 4"];
        sort($types);
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'b_id'      => $i,
                'b_ten'     => $types[$i-1],
            ]);
        }
        DB::table('mst_bep')->insert($list);
    }
}
