<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieuDangTuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieudangtuyen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MaNTD')->unsigned();
            $table->foreign('MaNTD')->references('id')->on('nhatuyendung')->onDelete('cascade');
            $table->integer('MaNganh')->unsigned();
            $table->foreign('MaNganh')->references('id')->on('chuyennganh')->onDelete('cascade');
            $table->integer('MaTrinhDo')->unsigned();
            $table->foreign('MaTrinhDo')->references('id')->on('trinhdo')->onDelete('cascade');
            $table->integer('MaChungChi')->unsigned();
            $table->foreign('MaChungChi')->references('id')->on('chungchi')->onDelete('cascade');
            $table->string('TieuDe');
            $table->text('ViTriTuyenDung');
            $table->text('MoTaCV');
            $table->date('ThoiHanNopHoSo');
            $table->integer('SoLuongTuyenDung');
            $table->text('NoiLamViec');
            $table->text('YeuCauKinhNghiem');
            $table->float('LuongKhoiDiem', 8, 2);
            $table->boolean('Hot');
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
        Schema::dropIfExists('phieudangtuyen');
    }
}
