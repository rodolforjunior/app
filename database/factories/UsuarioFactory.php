<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),           
            'sobrenome' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'senha' => bcrypt('password'),
        ];
    }
}
