<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrnUserNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_user_nhanvien', function (Blueprint $table) {
            $table->unsignedBigInteger('id_nhan_vien');
            $table->unsignedBigInteger('id_user');
            $table->primary('id_nhan_vien');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('id_nhan_vien') 
                ->references('nv_id')->on('mst_nhan_vien')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_user') 
                ->references('id')->on('users')
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
        Schema::dropIfExists('trn_user_nhanvien');
    }
}
