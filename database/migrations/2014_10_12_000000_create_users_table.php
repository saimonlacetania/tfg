<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('cognoms');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profile_pic')->nullable();
            $table->string('telefon')->unique();
            $table->string('direccio')->nullable();
            $table->string('direccio_compra')->nullable();
            $table->string('cp')->nullable();
            $table->string('cp_compra')->nullable();
            $table->string('poblacio')->nullable();
            $table->string('poblacio_compra')->nullable();
            $table->string('provincia')->nullable();
            $table->string('provincia_compra')->nullable();
            $table->string('data_naix');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
