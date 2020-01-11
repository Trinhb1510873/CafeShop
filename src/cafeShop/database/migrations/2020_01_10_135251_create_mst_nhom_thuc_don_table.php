<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNhomThucDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_nhom_thuc_don', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ntd_id')->comment('mã nhóm thực đơn');
            $table->string('ntd_ten', 100)->comment('Tên nhóm thực đơn');
            $table->string('ntd_dienGiai', 1000)->comment('diễn giải nhóm thực đơn');
            $table->unsignedBigInteger('id_bep')->comment('ID bếp');
            $table->unsignedBigInteger('id_loaiMonAn')->comment('ID loại món ăn');
            $table->unique(['ntd_ten']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_bep') 
                ->references('b_id')->on('mst_bep')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('id_loaiMonAn') 
                ->references('lma_id')->on('mst_loai_mon_an')
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
        Schema::dropIfExists('mst_nhom_thuc_don');
    }
}
