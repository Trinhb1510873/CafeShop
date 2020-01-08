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
            $table->bigIncrements('lma_id');
            $table->string('lma_ten', 50)->comment('Tên loại # Tên loại món ăn');
            $table->tinyInteger('lma_xoa')->default('1')->comment('Xóa chức vụ # 1: chưa xóa, 2: đã xóa');
            $table->timestamps();
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
