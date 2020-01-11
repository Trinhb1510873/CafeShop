<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstBanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_ban', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ban_id')->comment('Mã bàn');
            $table->string('ban_ten', 100)->comment('Tên bàn');
            $table->bigInteger('ban_trangThai')->comment('1:có khách, 2:trống');
            $table->bigInteger('ban_soLuong')->comment('số lượng khách');
            $table->unsignedBigInteger('id_tang')->comment('bàn của tầng nào');
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_tang') 
                ->references('t_id')->on('mst_tang')
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
        Schema::dropIfExists('mst_ban');
    }
}
