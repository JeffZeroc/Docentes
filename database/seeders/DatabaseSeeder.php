<?php

namespace Database\Seeders;

use App\Models\Docente;
use App\Models\Facultad;
use App\Models\Periodo;
use Database\Factories\DocenteFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Docente::factory(50)->create();
        Periodo::factory(10)->create();
        Facultad::factory(3)->create();
    }
}
