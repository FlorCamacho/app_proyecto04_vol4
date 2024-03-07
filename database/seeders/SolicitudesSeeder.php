<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitudes;

class SolicitudesSeeder extends Seeder
{
    public function run(): void
    {
        Solicitudes::create([
            'fecha_servicio' => '2024-03-01',
            'hora_inicio' => '08:00',
            'hora_fin' => '12:00',
            'estado' => 'Pendiente',
            'solicitante_id' => 1,
            'solicitante_type' => 'Cliente',
            'niñera_id' => 2,
        ]);
        Solicitudes::create([
            'fecha_servicio' => '2024-05-15',
            'hora_inicio' => '15:00',
            'hora_fin' => '17:00',
            'estado' => 'Pendiente',
            'solicitante_id' => 2,
            'solicitante_type' => 'Cliente',
            'niñera_id' => 2,
        ]);
    }
}
