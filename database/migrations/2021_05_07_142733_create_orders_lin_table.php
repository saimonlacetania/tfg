<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersLinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_lin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ordre')->constrained('orders');
            $table->foreignId('id_producte')->constrained('productes');
            $table->foreignId('id_botiga')->constrained('botigues');
            $table->string('quantitat');
            $table->string('enviat');
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
        Schema::dropIfExists('orders_lin');
    }
}
