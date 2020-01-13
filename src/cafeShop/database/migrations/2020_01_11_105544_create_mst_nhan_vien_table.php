<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_nhan_vien', function (Blueprint $table) {
            $table->bigIncrements('nv_id');
            $table->string('nv_hoTen', 100)->comment('Tên nhân viên');
            $table->dateTime('nv_ngaySinh')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Ngày sinh # Ngày sinh');
            $table->unsignedTinyInteger('nv_gioiTinh')->default('1')->comment('Giới tính # Giới tính: 0-Nữ, 1-Nam, 2-Khác');
            $table->string('nv_diaChi', 100)->comment('địa chỉ nhân viên');
            $table->string('nv_sdt', 100)->comment('số điện thoại nhân viên');
            $table->string('nv_email', 100)->comment('Email # Email');
            $table->string('nv_so_cmnd', 100)->comment('số CMND nhân viên');
            $table->string('nv_so_tk_the', 100)->comment('số tài khoản thẻ');
            $table->unsignedTinyInteger('nv_trang_thai')->default('1')->comment('Trạng thái # Trạng thái: 1:làm, 2:nghỉ');
            $table->unsignedBigInteger('id_chuc_vu')->comment('Chức vụ của nhân viên');
            $table->unsignedBigInteger('id_bo_phan')->comment('Nhân viên thuộc bộ phận nào');
            $table->unsignedBigInteger('id_chi_nhanh')->comment('Nhân viên làm việc ở chi nhánh nào');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_chuc_vu') 
                ->references('cv_id')->on('mst_chuc_vu')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_bo_phan') 
                ->references('bp_id')->on('mst_bo_phan')
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
        Schema::dropIfExists('mst_nhan_vien');
    }
}
