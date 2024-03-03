<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    public function run(): void
    {
        Rol::create([
            'nombre' => 'Administrador',
            'descripcion' => 'Rol de administrador del sistema',
        ]);

        Rol::create([
            'nombre' => 'Niñera',
            'descripcion' => 'Rol de niñera que proporciona servicios de cuidado de niños',
        ]);

        Rol::create([
            'nombre' => 'Cliente',
            'descripcion' => 'Rol de cliente que solicita servicios de cuidado de niños',
        ]);
    }
}
