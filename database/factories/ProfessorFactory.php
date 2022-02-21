<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'matricula' => $this->faker->unique()->randomNumber(3, false),
            'competencia' => $this->faker->name(),
            'escolaridade' => $this->faker->name(),            
            'cpf' => mt_rand(10000000000, 99999999999),
        ];
    }
}