<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstXuatNguyenVatLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_xuat_nguyen_vat_lieu', function (Blueprint $table) {
            $table->bigIncrements('xnvl_id');
            $table->string('xnvl_ten', 100)->comment('tên phiếu xuất');
            $table->dateTime('xnvl_ngay_xuat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('ngày xuat');

            $table->unsignedBigInteger('id_so_ket_toan')->comment('sổ kết toán');
            $table->unsignedBigInteger('id_loai_xuat_nvl')->comment('loại xuất nvl');
            $table->unsignedBigInteger('id_nhan_vien_xuat')->comment('người xuất nvl');
            $table->unsignedBigInteger('id_kho')->comment('xuất từ kho nào');
            $table->unsignedBigInteger('id_chi_nhanh')->comment('xuất từ chi nhánh nào');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_so_ket_toan') 
                ->references('skt_id')->on('mst_so_ket_toan')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_loai_xuat_nvl') 
                ->references('lx_id')->on('mst_loai_xuat')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_nhan_vien_xuat') 
                ->references('nv_id')->on('mst_nhan_vien')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_kho') 
                ->references('k_id')->on('mst_kho')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_chi_nhanh') 
                ->references('cn_id')->on('mst_chi_nhanh')
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
        Schema::dropIfExists('mst_xuat_nguyen_vat_lieu');
    }
}
