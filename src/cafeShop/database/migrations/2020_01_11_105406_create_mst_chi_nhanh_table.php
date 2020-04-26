<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstChiNhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_chi_nhanh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('cn_id')->comment('Mã chi nhánh');
            $table->string('cn_ten', 100)->comment('Tên chi nhánh');
            $table->string('cn_diachi', 100)->comment('địa cnỉ chi nhánh');
            $table->string('cn_soDienThoai', 100)->comment('số điện thoại chi nhánh');
            $table->unsignedBigInteger('id_cuaHang')->comment('Chi nhánh thuộc cửa hàng nào');
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_cuaHang') 
                ->references('ch_id')->on('mst_cua_hang')
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
        Schema::dropIfExists('mst_chi_nhanh');
    }
}
