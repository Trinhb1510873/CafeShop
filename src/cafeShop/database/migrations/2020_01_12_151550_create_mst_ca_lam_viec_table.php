<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstCaLamViecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_ca_lam_viec', function (Blueprint $table) {
            $table->bigIncrements('clv_id');
            $table->string('clv_ten', 100)->comment('Tên ca');
            $table->dateTime('clv_tg_bat_dau')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian bắt đầu');
            $table->dateTime('clv_tg_ket_thuc')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian kết thúc');
            $table->float('clv_so_tien')->comment('tiền lương của ca làm việc');
            
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
        Schema::dropIfExists('mst_ca_lam_viec');
    }
}
