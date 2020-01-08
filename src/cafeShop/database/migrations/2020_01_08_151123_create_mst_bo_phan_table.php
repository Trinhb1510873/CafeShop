<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstBoPhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_bo_phan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('bp_id')->autoIncrement()->comment('Mã bộ phận');
            $table->string('bp_ten', 50)->comment('Tên bộ phận');
            $table->tinyInteger('bp_xoa')->default('1')->comment('Xóa bộ phận # 1: chưa xóa, 2: đã xóa');
            $table->unique(['bp_ten']);
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
        Schema::dropIfExists('mst_bo_phan');
    }
}
