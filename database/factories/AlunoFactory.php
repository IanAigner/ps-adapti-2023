<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=> $this->faker->word(),
            'descricao' => $this->faker->text(100),
            'imagem' => $this->faker->imageUrl(),
            'contratado' => $this->faker->boolean(),
            'curso_id' => (Curso::all()->random(1)->first())->id,
        ];
    }
}