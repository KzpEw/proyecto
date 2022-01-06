<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    public function definition()
    {
        return [
            'titulo'            => $this->faker->sentence(),
            'editorial'         => $this->faker->company(),
            'autor'             => $this->faker->name(),
        ];
    }
}
