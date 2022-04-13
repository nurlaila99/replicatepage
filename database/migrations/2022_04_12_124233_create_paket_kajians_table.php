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
        Schema::create('paket_kajians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('detail_paket');
            $table->date('tanggal_kajian');
            $table->date('tanggal_selesai')->nullable();
            $table->string('tempat');
            $table->time('waktu_kajian');
            $table->text('deskripsi')->nullable();
            $table->dateTime('tgl_beli_tiket');
            $table->dateTime('tgl_penutupan_tiket');
            $table->integer('harga_tiket');
            $table->integer('stok_tiket');
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
        Schema::dropIfExists('paket_kajians');
    }
};
