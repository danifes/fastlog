<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComersialcasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercialcasas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cedula');
            $table->string('direccion');
            $table->string('administrador');
            $table->string('asesor');
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
        Schema::dropIfExists('comercialcasas');
    }
}
