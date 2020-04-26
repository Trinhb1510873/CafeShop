<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstHinhAnhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_hinh_anh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ha_id');
            $table->string('ha_ten');
            $table->unsignedBigInteger('id_mon_an');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('mst_hinh_anh');
    }
}
