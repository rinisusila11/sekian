<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance', function (Blueprint $table) {
            $table->bigIncrements('id_maintenance');
            $table->unsignedBigInteger('aset_id');
            $table->date('tanggal_maintenance');
            $table->string('keterangan');
            $table->string('dokumen_pendukung');
            $table->timestamps();

            $table->foreign('aset_id')->references('id_aset')->on('aset_tik')
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
        Schema::dropIfExists('maintenance');
    }
}
