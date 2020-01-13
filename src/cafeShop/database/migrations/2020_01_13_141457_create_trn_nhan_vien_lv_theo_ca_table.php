<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnNhanVienLvTheoCaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_nhan_vien_lv_theo_ca', function (Blueprint $table) {
            $table->unsignedBigInteger('id_nhan_vien');
            $table->unsignedBigInteger('id_ca_lam_viec');
            $table->primary(['id_nhan_vien', 'id_ca_lam_viec']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_nhan_vien') 
                ->references('nv_id')->on('mst_nhan_vien')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_ca_lam_viec') 
                ->references('clv_id')->on('mst_ca_lam_viec')
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
        Schema::dropIfExists('trn_nhan_vien_lv_theo_ca');
    }
}
