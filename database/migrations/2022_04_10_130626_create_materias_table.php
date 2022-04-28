<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->engine='InnoDB';

            $table->id();
            $table->foreignId('carrera_id')
            ->constrained('carreras')
            ->onUpdate('cascade');
            $table->string('nombre');
            $table->string('codigo',15)->unique();
            $table->integer('hora_a');
            $table->integer('hora_p');
            $table->integer('hora_d');
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
        Schema::dropIfExists('materias');
    }
}
