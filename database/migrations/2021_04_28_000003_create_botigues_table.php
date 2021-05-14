<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotiguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('botigues', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('descripcio');
            $table->string('telf_1');
            $table->string('telf_2')->nullable();
            $table->foreignId('id_usuari')->constrained('users');
            $table->string('direccio');
            $table->string('img_perfil')->nullable();
            $table->string('img_portada')->nullable();
            $table->string('cp');
            $table->string('poblacio');
            $table->string('provincia');
            $table->string('email')->unique();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('nif')->nullable();
            $table->string('cif')->nullable();
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
        Schema::dropIfExists('botigues');
    }
}
