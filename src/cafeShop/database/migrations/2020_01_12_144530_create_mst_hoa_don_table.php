<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_hoa_don', function (Blueprint $table) {
            $table->bigIncrements('hd_id');
            $table->string('hd_ten', 100)->comment('Tên hóa đơn');
            $table->unsignedTinyInteger('hd_trang_thai')->default('1')->comment('Trạng thái # Trạng thái: 1:chưa thanh toán, 2:đã thanh toán');
            $table->dateTime('hd_tg_vao')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian vào');
            $table->dateTime('hd_tg_ra')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian ra');
            $table->float('hd_tong_tien')->comment('Tổng tiền');
            $table->float('hd_tong_tien_phai_tra')->comment('Tổng tiền phải trả đã áp dụng CTKM');
            $table->unsignedBigInteger('id_nhan_vien')->comment('người lập hóa đơn');
            $table->unsignedBigInteger('id_ban')->comment('hóa đơn của bàn nào');
            $table->unsignedBigInteger('id_chi_nhanh')->comment('thuộc chi nhánh nào');
            $table->unsignedBigInteger('id_khach_hang')->comment('mã khách hàng')->nullable();
            $table->unsignedBigInteger('id_ct_khuyen_mai')->comment('chương trình khuyến mãi')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_nhan_vien') 
                ->references('nv_id')->on('mst_nhan_vien')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_ban') 
                ->references('ban_id')->on('mst_ban')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_chi_nhanh') 
                ->references('cn_id')->on('mst_chi_nhanh')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_khach_hang') 
                ->references('kh_id')->on('mst_khach_hang')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_ct_khuyen_mai') 
                ->references('ctkm_id')->on('mst_chuong_trinh_khuyen_mai')
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
        Schema::dropIfExists('mst_hoa_don');
    }
}
