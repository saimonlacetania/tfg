<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentaris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuari')->constrained('users');
            $table->foreignId('id_producte')->constrained('productes');
            $table->string('descripcio')->nullable();
            $table->string('valoracio');
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
        Schema::dropIfExists('comentaris');
    }
}
