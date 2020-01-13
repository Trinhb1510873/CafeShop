<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstTonNguyenVatLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_ton_nguyen_vat_lieu', function (Blueprint $table) {
            $table->bigIncrements('tnvl_id');
            $table->string('id_nvl', 100)->comment('tên nguyen vật liệu');
            $table->float('tnvl_so_luong')->comment('số lượng xuất');
            $table->dateTime('tnvl_thoi_gian')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('thời điểm hiện tại');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_ton_nguyen_vat_lieu');
    }
}
