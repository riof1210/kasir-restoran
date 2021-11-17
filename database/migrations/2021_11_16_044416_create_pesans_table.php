<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pelanggan')->unsigned();
            $table->bigInteger('id_transaksi')->unsigned();
            $table->bigInteger('id_barang')->unsigned();
            $table->foreign('id_pelanggan')->references('id')
                ->on('pelanggans')->onUpdate('cascade')
                ->onDelete('cascade');
                $table->foreign('id_transaksi')->references('id')
                ->on('transaksis')->onUpdate('cascade')
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
        Schema::dropIfExists('pesans');
    }
}
