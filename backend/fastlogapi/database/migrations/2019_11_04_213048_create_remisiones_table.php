<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remisiones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_clinica');
            $table->integer('id_casa_comercial');
            $table->integer('id_estado');
            $table->integer('id_usuario');
            $table->integer('id_gps');
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
        Schema::dropIfExists('remisiones');
    }
}
