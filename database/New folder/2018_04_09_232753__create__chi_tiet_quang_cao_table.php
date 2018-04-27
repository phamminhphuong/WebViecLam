<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietQuangCaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietquangcao', function (Blueprint $table) {
            $table->increments('MaQuangCao');
            $table->foreign('MaQuangCao')->references('id')->on('quangcao')->onDelete('cascade');
            $table->integer('MaHopDong')->unsigned();
            $table->foreign('MaHopDong')->references('id')->on('hopdongquangcao')->onDelete('cascade');
            $table->string('NoiDung');
            $table->float('DonGia', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietquangcao');
    }
}
