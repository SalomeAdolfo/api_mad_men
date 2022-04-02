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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('estado', 50);
            $table->string('municipio', 50);
            $table->string('calle', 100);
            $table->string('codigo_postal',5);
            $table->string('numero_interior',5);
            $table->string('numero_exterior',5);
            $table->unsignedBigInteger('id_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
};
