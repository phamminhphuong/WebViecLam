<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHopDongQuangCaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopdongquangcao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('MaNTD')->unsigned();
            $table->foreign('MaNTD')->references('id')->on('nhatuyendung')->onDelete('cascade');
            $table->date('NgayLap');
            $table->string('NoiDungHopDong');
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
        Schema::dropIfExists('hopdongquangcao');
    }
}
