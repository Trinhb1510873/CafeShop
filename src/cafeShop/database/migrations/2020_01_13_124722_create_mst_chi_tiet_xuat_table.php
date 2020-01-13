<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstChiTietXuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_chi_tiet_xuat', function (Blueprint $table) {
            $table->unsignedBigInteger('id_xuat')->comment('nguyên vật liệu');
            $table->unsignedBigInteger('id_nguyen_vat_lieu')->comment('nguyên vật liệu');
            $table->float('ctx_so_luong')->comment('số lượng xuất');
            $table->unsignedBigInteger('id_don_vi_tinh')->comment('đơn vị tính');

            $table->primary(['id_xuat', 'id_nguyen_vat_lieu']);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_don_vi_tinh') 
                ->references('dvt_id')->on('mst_don_vi_tinh')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_xuat') 
                ->references('xnvl_id')->on('mst_xuat_nguyen_vat_lieu')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_nguyen_vat_lieu') 
                ->references('nvl_id')->on('mst_nguyen_vat_lieu')
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
        Schema::dropIfExists('mst_chi_tiet_xuat');
    }
}
