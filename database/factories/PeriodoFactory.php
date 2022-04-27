<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodoFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(15),
            'inicio_periodo'=> $this->faker->date(),
            'fin_periodo'=> $this->faker->date(),
        ];
    }
}
