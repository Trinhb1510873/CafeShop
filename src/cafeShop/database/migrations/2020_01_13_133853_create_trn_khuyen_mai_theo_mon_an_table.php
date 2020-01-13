<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnKhuyenMaiTheoMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_khuyen_mai_theo_mon_an', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ctkm')->comment('chương trinh KM');
            $table->unsignedBigInteger('id_mon_an')->comment('món ăn được KM trong ct');

            $table->timestamps();
            $table->softDeletes();

            $table->primary(['id_ctkm', 'id_mon_an']);

            $table->foreign('id_ctkm') 
                ->references('ctkm_id')->on('mst_chuong_trinh_khuyen_mai')
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
        Schema::dropIfExists('trn_khuyen_mai_theo_mon_an');
    }
}
