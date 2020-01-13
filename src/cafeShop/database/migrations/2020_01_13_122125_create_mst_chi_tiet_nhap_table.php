<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstChiTietNhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_chi_tiet_nhap', function (Blueprint $table) {
            $table->unsignedBigInteger('id_nhap')->comment('phiếu nhập');
            $table->unsignedBigInteger('id_nguyen_vat_lieu')->comment('nguyên vật liệu');
            $table->float('ctn_so_luong')->comment('số lượng nhập');
            $table->float('ctn_gia')->comment('giá tiền');
            $table->dateTime('ctn_hsd')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('sử dụng đến ngày');
            $table->unsignedBigInteger('id_don_vi_tinh')->comment('đơn vị tính');

            $table->primary(['id_nhap', 'id_nguyen_vat_lieu']);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_don_vi_tinh') 
                ->references('dvt_id')->on('mst_don_vi_tinh')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_nhap') 
                ->references('nnvl_id')->on('mst_nhap_nguyen_vat_lieu')
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
        Schema::dropIfExists('mst_chi_tiet_nhap');
    }
}
