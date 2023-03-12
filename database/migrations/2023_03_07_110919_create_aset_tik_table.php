<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsetTikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_tik', function (Blueprint $table) {
            $table->bigIncrements('id_aset');
            $table->unsignedBigInteger('jenis_id');
            $table->unsignedBigInteger('opd_id');
            $table->unsignedBigInteger('lokasi_id');
            $table->string('nama_aset');
            $table->string('type');
            $table->string('merk');
            $table->string('seri');
            $table->date('tanggal_beli');
            $table->integer('harga_beli');
            $table->date('tanggal_garansi');
            $table->timestamps();

            $table->foreign('jenis_id')->references('id_jenis')->on('jenis_aset')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('opd_id')->references('id_opd')->on('opd')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('lokasi_id')->references('id_lokasi')->on('lokasi_aset')
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
        Schema::dropIfExists('aset_tik');
    }
}
