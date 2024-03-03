<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicios;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        {
            Servicios::create([
                'nombre' => 'Cuidado de 3 niñas',
                'descripcion' => 'Cuidado de las niñas durante toda la noche',
                'precio' => 900,
            ]);
    
            Servicios::create([
                'nombre' => 'Cuidado de 1 niña',
                'descripcion' => 'Cuidado de una niña en la mañana',
                'precio' => 200,
            ]);
        }
    }
