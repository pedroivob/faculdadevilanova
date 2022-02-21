<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = collect(['Disponível', 'Indisponível']);

        return [
            'nomedocurso' => $this->faker->name(),
            'qntmax' => $this->faker->randomDigitNotNull(),
            'descricao' => $this->faker->text(200),
            'datacriacao' => $this->faker->dateTime(),
            'dataupdate' => $this->faker->dateTime(),
            'categoria' => $this->faker->word(),
            'mensalidade' => $this->faker->randomFloat(2, 0, 9999.99),
            'status' => $status->random()
        ];
    }
}