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
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->bigInteger('penjual_id');
            $table->integer('status')->default('0');
            $table->string('no_faktur');
            $table->date('tanggal');
            $table->integer('total_harga');
            $table->string('bukti')->default('default.png');
            $table->integer('dibayar')->default('0');
            $table->integer('dikirim')->default('0');
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
};
