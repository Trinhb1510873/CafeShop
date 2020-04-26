<?php

use Illuminate\Database\Seeder;

class BophanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_bo_phan')->insert([
            [
                'bp_ten' => 'Bếp'
            ],
            [
                'bp_ten' => 'Kho'
            ],
            [
                'bp_ten' => 'Thu ngân'
            ],
            [
                'bp_ten' => 'Order'
            ]
        ]);
    }
}
