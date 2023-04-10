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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->date('fecha');
            $table->dateTime('hora');
            $table->unsignedBigInteger('recinto_id');
            $table->foreign('recinto_id')
                ->references('id')
                ->on('recintos')
                ->onDelete('cascade');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('aforo');
            $table->unsignedBigInteger('imagen_id');
            $table->foreign('imagen_id')
                ->references('id')
                ->on('imagens')
                ->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
