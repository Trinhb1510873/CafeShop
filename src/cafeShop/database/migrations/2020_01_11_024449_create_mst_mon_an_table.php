    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_mon_an', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('ma_id')->comment('Mã mon_an');
            $table->string('ma_ten', 100)->comment('Tên mon_an');
            $table->string('ma_dienGiai', 1000)->comment('Dien_giai mon_an')->nullable();
            $table->decimal('ma_giaBan')->comment('Giá bán');
            $table->decimal('ma_giaVon')->comment('Giá vốn');
            $table->bigInteger('ma_mon_dac_trung')->comment('1:món đặc trưng, 2:không phải món đặc trưng');
            $table->bigInteger('ma_thay_doi_theo_thoi_gia')->comment('1:không, 2:có');
            $table->bigInteger('ma_ngung_ban')->comment('1:không, 2:có');
            $table->string('ma_hinh', 500)->comment('hình avt mon_an');
            $table->unsignedBigInteger('id_don_vi_tinh')->comment('ID don_vi_tinh');
            $table->unsignedBigInteger('id_nhom_thuc_don')->comment('ID nhóm thực đơn');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['ma_ten']);
            $table->foreign('id_don_vi_tinh') 
                ->references('dvt_id')->on('mst_don_vi_tinh')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_nhom_thuc_don') 
                ->references('ntd_id')->on('mst_nhom_thuc_don')
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
        Schema::dropIfExists('mst_mon_an');
    }
}
