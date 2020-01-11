<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNhomNguyenVatLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_nhom_nguyen_vat_lieu', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('nnvl_id')->comment('Mã nhom_nguyen_vat_lieu');
            $table->string('nnvl_ten', 100)->comment('Tên nhom_nguyen_vat_lieu');
            $table->unique(['nnvl_ten']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_nhom_nguyen_vat_lieu');
    }
}
