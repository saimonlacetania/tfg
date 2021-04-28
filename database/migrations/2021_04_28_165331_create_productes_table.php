<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productes', function (Blueprint $table) {
            $table->id();
            $table->string('ref');
            $table->foreignId('id_botiga')->constrained('botigues');
            $table->string('nom');
            $table->string('descripcio');
            $table->string('preu');
            $table->string('stock');
            $table->string('actiu');
            $table->foreignId('id_categoria')->constrained('categories');
            $table->timestamps();
            $table->string('visites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productes');
    }
}
