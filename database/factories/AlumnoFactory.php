<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Alumno::class;
    public function definition()
    {
        return [
            'dni'=>$this->faker->sentences(1),
            'nombres'=>$this->faker->sentences(1),
            'apellidos'=>$this->faker->sentences(1),
            'edad'=>$this->faker->sentences(1),
            'fechaN'=>$this->faker->sentences(1),
            'idFacultad'=>$this->faker->sentences(1),
            'idEscuela'=>$this->faker->sentences(1),
            'estado'=>'1',
        ];
    }
}
