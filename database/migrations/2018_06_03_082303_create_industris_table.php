<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->date('thn_kerjasama');
            $table->unsignedInteger('id_jurusan');
            $table->foreign('id_jurusan')->references('id')->on('jurusans')->onDelete('CASCADE');
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
        Schema::dropIfExists('industris');
    }
}
