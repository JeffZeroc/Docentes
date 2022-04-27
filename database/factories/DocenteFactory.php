<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocenteFactory extends Factory
{
    protected $model = Docente::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'cedula'=> $this->faker->unique()->randomNumber(),
            'celular'=> $this->faker->randomNumber(),
            'direccion'=> $this->faker->realText(100),
            'correo_institucional'=> $this->faker->unique()->safeEmail(),
            'correo_personal'=> $this->faker->safeEmail(),
            'genero'=>'s',
            'etnia'=> $this->faker->name(10),
            'titulo_3_n'=> $this->faker->realText(20),
            'titulo_4_n'=> $this->faker->realText(20),
            'doctorado'=> $this->faker->realText(20),
            'phd'=> $this->faker->realText(20),
            'discapacidad'=> true,
            'estado'=> $this->faker->realText(15),
        ];
    }
}
