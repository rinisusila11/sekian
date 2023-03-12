<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiAsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_aset', function (Blueprint $table) {
            $table->bigIncrements('id_lokasi');
            $table->unsignedBigInteger('opd_id');
            $table->string('lokasi');
            $table->timestamps();

            $table->foreign('opd_id')->references('id_opd')->on('opd')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasi_aset');
    }
}
