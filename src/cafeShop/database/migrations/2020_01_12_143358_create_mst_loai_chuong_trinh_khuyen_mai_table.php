<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstLoaiChuongTrinhKhuyenMaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_loai_chuong_trinh_khuyen_mai', function (Blueprint $table) {
            $table->bigIncrements('lctkm_id');
            $table->string('lctkm_ten', 100)->comment('Tên chương trình khuyến mãi');
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
        Schema::dropIfExists('mst_loai_chuong_trinh_khuyen_mai');
    }
}
