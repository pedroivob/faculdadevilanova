<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanoFinanceiroFactory extends Factory
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
            'desconto' => random_int(0, 100),
            'observacao' => $this->faker->text(45),
        ];
    }
}