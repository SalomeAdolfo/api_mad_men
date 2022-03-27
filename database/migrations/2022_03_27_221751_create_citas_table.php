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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_consulta');
            $table->enum('estatus', ['activa','inactiva']);
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('psicologo_id');

            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('psicologo_id')->references('id')->on('psicologos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
