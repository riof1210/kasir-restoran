<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pelanggan')->unsigned();;
            $table->bigInteger('id_barang')->unsigned();
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->integer('uang_bayar');
            $table->integer('kembalian');
            $table->datetime('tgl_transaksi');
            $table->foreign('id_pelanggan')->references('id')
                ->on('pelanggans')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_barang')->references('id')
                ->on('barangs')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('transaksis');
    }
}
