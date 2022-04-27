<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->foreignId('facultad_id')
            ->constrained('facultades')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nombre',100);
            $table->string('codigo',15)->unique();
            $table->integer('duracion');
            $table->string('estado');
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
        Schema::dropIfExists('carreras');
    }
}
