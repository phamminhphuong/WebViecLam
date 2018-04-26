<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKyNangXinViecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kynangxinviec', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TieuDe');
            $table->string('NoiDung'); 
            $table->string('HinhAnh');
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
        Schema::dropIfExists('kynangxinviec');
    }
}
