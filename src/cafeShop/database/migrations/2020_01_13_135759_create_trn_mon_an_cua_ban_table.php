<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnMonAnCuaBanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_mon_an_cua_ban', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ban');
            $table->unsignedBigInteger('id_mon_an');
            $table->primary(['id_ban', 'id_mon_an']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_ban') 
                ->references('ban_id')->on('mst_ban')
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
        Schema::dropIfExists('trn_mon_an_cua_ban');
    }
}
