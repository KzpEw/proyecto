<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Libro::factory(150)->create();
        \App\Models\Socio::factory(50)->create();
        \App\Models\Prestamo::factory(25)->create();
    }
}
