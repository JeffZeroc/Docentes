<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cedula',10)->unique();
            $table->string('celular',10);
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('correo_institucional',50);
            $table->string('correo_personal',50);
            $table->String('sexo');
            $table->string('etnia',50);
            $table->string('titulo_3_n',100);
            $table->string('titulo_4_n',100);
            $table->string('doctorado',100);
            $table->string('phd',100);
            $table->String('discapacidad');
            $table->String('relacion_dependencia');
            $table->String('relacion_dependencia2');
            $table->String('dedicacion');
            $table->String('porcentaje',3)->nullable();
            $table->string('estado',15);
            $table->date('fecha_suspencion')->nullable();
            $table->integer('periodo')->nullable();
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
        Schema::dropIfExists('docentes');
    }
}
