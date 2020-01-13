<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNhaCungCapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_nha_cung_cap', function (Blueprint $table) {
            $table->bigIncrements('ncc_id');
            $table->string('ncc_ten', 100)->comment('Tên nhà cung cấp');
            $table->string('ncc_diachi', 100)->comment('địa chỉ nhà cung cấp');
            $table->string('ncc_sdt', 100)->comment('sdt nhà cung cấp');
            
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
        Schema::dropIfExists('mst_nha_cung_cap');
    }
}
