<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->unsignedInteger('id_petugas');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
            $table->string('nisn', 10);
            $table->foreign('nisn')->references('nisn')->on('siswa');
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar', 8);
            $table->string('tahun_dibayar', 4);
            $table->unsignedInteger('id_spp');
            $table->foreign('id_spp')->references('id_spp')->on('siswa')->onDelete('cascade');;
            $table->integer('jumlah_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
};
