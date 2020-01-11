<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstBepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_bep', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('b_id')->comment('Mã bếp');
            $table->string('b_ten', 50)->comment('Tên bếp');
            $table->unique(['b_ten']);
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
        Schema::dropIfExists('mst_bep');
    }
}
