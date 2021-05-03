<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCistellaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cistella', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuari')->constrained('users');
            $table->foreignId('id_productes')->constrained('productes');
            $table->string('quantitat');
            $table->string('pagat');
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
        Schema::dropIfExists('cistella');
    }
}
