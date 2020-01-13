<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstChuongTrinhKhuyenMaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_chuong_trinh_khuyen_mai', function (Blueprint $table) {
            $table->bigIncrements('ctkm_id');
            $table->string('ctkm_ma', 100)->comment('Mã chương trình khuyến mãi');
            $table->string('ctkm_ten', 100)->comment('Tên chương trình khuyến mãi');
            $table->decimal('ctkm_so_luong')->comment('Số lượng mã khuyến mãi');
            $table->string('ctkm_dien_giai', 500)->comment('diễn giải CTKM');
            $table->dateTime('ctkm_tg_bat_dau')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian bắt đầu CTKM');
            $table->dateTime('ctkm_tg_ket_thuc')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian kết thúc CTKM');
            $table->unsignedBigInteger('id_loai_ctkm')->comment('Loại chương trình khuyến mãi');
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_loai_ctkm') 
                ->references('lctkm_id')->on('mst_loai_chuong_trinh_khuyen_mai')
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
        Schema::dropIfExists('mst_chuong_trinh_khuyen_mai');
    }
}
