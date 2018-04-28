<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuangCaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quangcao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TieuDe');
            $table->string('HinhAnh');
            $table->date('ThoiHanDangQC');
            $table->text('NoiDung');
            $table->float('ChiPhi', 8, 2);
            $table->boolean('KhachHangXacNhan');
            $table->boolean('AdminXacNhan');
            $table->string('Link');
            $table->integer('UuTien');
            $table->integer('MaNTD')->unsigned();
            $table->foreign('MaNTD')->references('id')->on('nhatuyendung')->onDelete('cascade');
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
        Schema::dropIfExists('quangcao');
    }
}
