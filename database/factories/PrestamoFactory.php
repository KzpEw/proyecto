<?php

namespace Database\Factories;

use App\Models\Prestamo;
use App\Models\Socio;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestamoFactory extends Factory
{
    protected $model = Prestamo::class;
    public function definition()
    {
        return [
            'id_socio'                   => Socio::all()->random()->id,
            'id_libro'                   => Libro::all()->unique()->random()->id,
            'fecha_prestamo'             => $this->faker->date(),
            'fecha_devolucion'           => $this->faker->date(), 

            //'fecha_prestamo'             => $this->faker->date($format = 'd-m-Y'),
            //'fecha_devolucion'           => $this->faker->date($format = 'd-m-Y', $startDate = 'fecha_prestamo'), 
            
            //'fecha_prestamo'             => $this->faker->dateTimeThisYear($startdate = '-30 days'),
            //'fecha_devolucion'           => $this->faker->date(clone $startDate)->modify('+1 day'),
        ];
    }
}
