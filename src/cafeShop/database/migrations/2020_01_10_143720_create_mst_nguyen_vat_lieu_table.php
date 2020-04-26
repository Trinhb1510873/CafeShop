<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNguyenVatLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_nguyen_vat_lieu', function (Blueprint $table) {
            $table->bigIncrements('nvl_id');
            $table->string('nvl_ten', 100)->comment('Tên NVL');
            $table->string('nvl_tinhChat', 100)->comment('tính chất NVL');
            $table->decimal('nvl_soLuong')->comment('Số lượng NVL');
            $table->unsignedBigInteger('id_don_vi_tinh')->comment('ID don_vi_tinh');
            $table->unsignedBigInteger('id_kho')->comment('ID kho');
            $table->unsignedBigInteger('id_nhom_nvl')->comment('ID nhóm NVL');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_don_vi_tinh') 
                ->references('dvt_id')->on('mst_don_vi_tinh')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_kho') 
                ->references('k_id')->on('mst_kho')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_nhom_nvl') 
                ->references('nnvl_id')->on('mst_nhom_nguyen_vat_lieu')
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
        Schema::dropIfExists('mst_nguyen_vat_lieu');
    }
}
