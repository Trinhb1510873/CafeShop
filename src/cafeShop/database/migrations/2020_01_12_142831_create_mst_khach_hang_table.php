<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstKhachHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_khach_hang', function (Blueprint $table) {
            $table->bigIncrements('kh_id');
            $table->string('kh_ten', 100)->comment('Tên khach hang');
            $table->string('kh_sdt', 20)->comment('số điện thoại khach hang');
            $table->string('kh_diachi', 100)->comment('địa chi khach hang');
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
        Schema::dropIfExists('mst_khach_hang');
    }
}
