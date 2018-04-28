<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhaTuyenDungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhatuyendung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenNTD');
            $table->text('DiaChi');
            $table->string('DienThoai');
            $table->string('DiaChiWeb');
            $table->text('GioiThieu');
            $table->string('HinhAnh');
            $table->integer('MaTaiKhoan')->unsigned();
            $table->foreign('MaTaiKhoan')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('nhatuyendung');
    }
}
