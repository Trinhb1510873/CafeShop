<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstThayDoiTheoThoiGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_thay_doi_theo_thoi_gia', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mon_an')->comment('món ăn');
            $table->float('td_gia')->comment('giá món ăn');
            $table->dateTime('td_thoi_gian')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('thời gian mà món ăn có giá này');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_mon_an') 
                ->references('ma_id')->on('mst_mon_an')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_thay_doi_theo_thoi_gia');
    }
}
