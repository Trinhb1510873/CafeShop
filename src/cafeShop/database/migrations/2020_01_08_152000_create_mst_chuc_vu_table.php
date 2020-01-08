<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstChucVuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_chuc_vu', function (Blueprint $table) {
            $table->bigIncrements('cv_id');
            $table->string('cv_ten', 50)->comment('Tên chức vụ');
            $table->tinyInteger('cv_xoa')->default('1')->comment('Xóa chức vụ # 1: chưa xóa, 2: đã xóa');
            $table->unique(['cv_ten']);
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
        Schema::dropIfExists('mst_chuc_vu');
    }
}
