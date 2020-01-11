<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnMonAnKemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_mon_an_kem', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('id_mon_an_chinh');
            $table->unsignedBigInteger('id_mon_an_kem');
            $table->timestamps();
            $table->softDeletes();

            $table->primary(['id_mon_an_chinh', 'id_mon_an_kem']);

            $table->foreign('id_mon_an_chinh') 
                ->references('ma_id')->on('mst_mon_an')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_mon_an_kem') 
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
        Schema::dropIfExists('trn_mon_an_kem');
    }
}
