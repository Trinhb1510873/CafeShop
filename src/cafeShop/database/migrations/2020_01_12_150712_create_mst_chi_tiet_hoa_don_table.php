<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstChiTietHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_chi_tiet_hoa_don', function (Blueprint $table) {
            $table->unsignedBigInteger('id_hoa_don');
            $table->unsignedBigInteger('id_mon_an');
            $table->unsignedBigInteger('cthd_sl_mon_an');

            $table->primary(['id_hoa_don', 'id_mon_an']);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_hoa_don') 
                ->references('hd_id')->on('mst_hoa_don')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_mon_an') 
                ->references('ma_id')->on('mst_mon_an')
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
        Schema::dropIfExists('mst_chi_tiet_hoa_don');
    }
}
