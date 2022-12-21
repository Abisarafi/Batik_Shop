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
        Schema::create('pesanan_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('barang_id');

            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');

            $table->unsignedBigInteger('pesanan_id');

            $table->foreign('pesanan_id')->references('id')->on('pesanans')->onDelete('cascade');

            $table->integer('jumlah');
            $table->integer('jumlah_harga');

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
        Schema::dropIfExists('pesanan_details');
    }
};
