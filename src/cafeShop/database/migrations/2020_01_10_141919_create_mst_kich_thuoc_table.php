<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstKichThuocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_kich_thuoc', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('kt_id')->comment('Mã kích thước');
            $table->string('kt_ten', 100)->comment('Tên kích thước');
            $table->unique(['kt_ten']);
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
        Schema::dropIfExists('mst_kich_thuoc');
    }
}
