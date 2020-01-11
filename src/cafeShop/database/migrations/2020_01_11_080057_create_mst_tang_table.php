<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstTangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_tang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('t_id')->comment('Mã tầng');
            $table->string('t_ten', 50)->comment('Tên tầng');
            $table->unique(['t_ten']);
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
        Schema::dropIfExists('mst_tang');
    }
}
