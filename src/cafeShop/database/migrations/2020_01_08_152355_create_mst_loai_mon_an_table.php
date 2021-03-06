<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstLoaiMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_loai_mon_an', function (Blueprint $table) {
            $table->bigIncrements('lma_id')->comment('Mã loại món ăn');
            $table->string('lma_ten', 50)->comment('Tên loại # Tên loại món ăn');
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
        Schema::dropIfExists('mst_loai_mon_an');
    }
}
