<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutKiloansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout_kiloans', function (Blueprint $table) {
            $table->id();
            $table->string('kd_invoice');
            $table->string('kd_paket');
            $table->integer('berat_paket');
            $table->string('metode_pembayaran');
            $table->bigInteger('harga_paket');
            $table->bigInteger('harga_antar')->default(0);
            $table->bigInteger('harga_total');
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
        Schema::dropIfExists('checkout_kiloans');
    }
}
