<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstSoKetToanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_so_ket_toan', function (Blueprint $table) {
            $table->bigIncrements('skt_id');
            $table->dateTime('skt_tg_bat_dau')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian bắt đầu');
            $table->dateTime('skt_tg_ket_thuc')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời gian kết thúc');
            $table->unsignedTinyInteger('skt_trang_thai')->default('1')->comment('Trạng thái # Trạng thái: 1:chưa kết toán, 2:đã kết toán');
            
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
        Schema::dropIfExists('mst_so_ket_toan');
    }
}
