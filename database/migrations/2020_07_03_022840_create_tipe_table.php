<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe', function (Blueprint $table) {
            $table->bigIncrements('tipe_id');
            $table->unsignedBigInteger('proyek_id');
            $table->string('file',10000);
            $table->string('nama_tipe',100);
            $table->string('deskripsi_tipe');
            $table->integer('lantai');
            $table->integer('kamar');
            $table->integer('kamar_mandi');
            $table->integer('ruang_keluarga');
            $table->integer('dapur');
            $table->integer('garasi');
            $table->integer('gudang');
            $table->timestamps();

            $table->foreign('proyek_id')->references('proyek_id')->on('proyeks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipe');
    }
}
