<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNhapNguyenVatLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_nhap_nguyen_vat_lieu', function (Blueprint $table) {
            $table->bigIncrements('nnvl_id');
            $table->string('nnvl_ma', 100)->comment('Mã phiếu nhập');
            $table->string('nnvl_ten', 100)->comment('Tên phiếu nhập');
            $table->float('nnvl_tong_tien')->comment('tổng tiền nhập');
            $table->dateTime('nnvl_ngay_nhap')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('ngày nhập');
            $table->text('nnvl_ghi_chu')->comment('Ghi chú # Ghi chú phiếu nhập');
            $table->tinyInteger('nnvl_trang_thai')->default('2')->comment('Trạng thái # Trạng thái phiếu nhập sản phẩm: 1-khóa, 2-lập phiếu, 3-thanh toán, 4-nhập kho');
            $table->unsignedBigInteger('id_nhan_vien_lap_phieu')->comment('nhân viên lập phiểu');
            $table->unsignedBigInteger('id_nhan_vien_ke_toan')->comment('kế toán');
            $table->unsignedBigInteger('id_nhan_vien_kho')->comment('Thủ kho');
            $table->unsignedBigInteger('id_chi_nhanh')->comment('chi nhánh nhập');
            $table->unsignedBigInteger('id_kho')->comment('nhập vào kho nào');
            $table->unsignedBigInteger('id_so_ket_toan')->comment('sổ kết toán');
            $table->unsignedBigInteger('id_nha_cung_cap')->comment('nhập từ nhà cung cấp nào');

            $table->unique(['nnvl_ma']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_nhan_vien_lap_phieu') 
                ->references('nv_id')->on('mst_nhan_vien')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_nhan_vien_ke_toan') 
                ->references('nv_id')->on('mst_nhan_vien')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_nhan_vien_kho') 
                ->references('nv_id')->on('mst_nhan_vien')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_chi_nhanh') 
                ->references('cn_id')->on('mst_chi_nhanh')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_kho') 
                ->references('k_id')->on('mst_kho')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_so_ket_toan') 
                ->references('skt_id')->on('mst_so_ket_toan')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_nha_cung_cap') 
                ->references('ncc_id')->on('mst_nha_cung_cap')
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
        Schema::dropIfExists('mst_nhap_nguyen_vat_lieu');
    }
}
