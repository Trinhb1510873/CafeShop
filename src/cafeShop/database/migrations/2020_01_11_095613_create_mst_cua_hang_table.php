<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstCuaHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_cua_hang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ch_id')->comment('Mã cửa hàng');
            $table->string('ch_ten', 100)->comment('Tên cửa hàng');
            $table->string('ch_tenNguoiDaiDien', 100)->comment('Tên người đại diện');
            $table->string('ch_diaChi', 100)->comment('địa chỉ cửa hàng');
            $table->string('ch_soDienThoai', 100)->comment('số điện thoại cửa hàng');
            $table->string('ch_maSoThue', 100)->comment('mã số thuế cửa hàng');
            
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
        Schema::dropIfExists('mst_cua_hang');
    }
}
