<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoSoXinViecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosoxinviec', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MaTaiKhoan')->unsigned();
            $table->foreign('MaTaiKhoan')->references('id')->on('users')->onDelete('cascade');
            $table->integer('MaNganh')->unsigned();
            $table->foreign('MaNganh')->references('id')->on('chuyennganh')->onDelete('cascade');
            $table->integer('MaTrinhDo')->unsigned();
            $table->foreign('MaTrinhDo')->references('id')->on('trinhdo')->onDelete('cascade');
            $table->integer('MaCC')->unsigned();
            $table->foreign('MaCC')->references('id')->on('chungchi')->onDelete('cascade');
            $table->string('TieuDe');
            $table->string('HoTen');
            $table->date('NgaySinh');
            $table->string('GioiTinh');
            $table->text('DiaChi');
            $table->string('DienThoai');
            $table->string('TinhTrangHonNhan');
            $table->float('LuongKhoiDiem', 8, 2);
            $table->string('NoiLamViec');
            $table->text('KinhNghiem');
            $table->string('HinhAnh');
            $table->text('NguyenVongLamViec');
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
        Schema::dropIfExists('hosoxinviec');
    }
}
