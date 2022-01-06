<?php

namespace Database\Factories;

use App\Models\Socio;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocioFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre'            => $this->faker->name(),
            'apellidos'         => $this->faker->lastname(),
            'dni'               => $this->faker->dni,
            'email'             => $this->faker->email(),
            'telefono'          => $this->faker->PhoneNumber(),
        ];
    }
}
