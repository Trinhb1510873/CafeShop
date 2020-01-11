<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstKhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_kho', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('k_id')->comment('Mã kho');
            $table->string('k_ten', 50)->comment('Tên kho');
            $table->string('k_diaChi', 200)->comment('địa chỉ kho');
            $table->unique(['k_ten']);
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
        Schema::dropIfExists('mst_kho');
    }
}
