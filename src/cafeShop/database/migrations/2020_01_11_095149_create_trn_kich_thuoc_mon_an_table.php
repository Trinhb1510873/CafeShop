<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnKichThuocMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_kich_thuoc_mon_an', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mon_an');
            $table->unsignedBigInteger('id_kich_thuoc');
            $table->primary(['id_mon_an', 'id_kich_thuoc']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_mon_an') 
                ->references('ma_id')->on('mst_mon_an')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_kich_thuoc') 
                ->references('kt_id')->on('mst_kich_thuoc')
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
        Schema::dropIfExists('trn_kich_thuoc_mon_an');
    }
}
