<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstDonViTinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_don_vi_tinh', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('dvt_id')->comment('Mã don_vi_tinh');
            $table->string('dvt_ten', 50)->comment('Tên don_vi_tinh');
            $table->unique(['dvt_ten']);
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
        Schema::dropIfExists('mst_don_vi_tinh');
    }
}
