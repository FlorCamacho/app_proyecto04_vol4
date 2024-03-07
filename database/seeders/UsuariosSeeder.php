<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuarios;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuarios::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'rol_id' => 1,
        ]);
        Usuarios::create([
            'name' => 'Niñera',
            'email' => 'niñeran@example.com',
            'password' => Hash::make('password'),
            'rol_id' => 1,
        ]);
        Usuarios::create([
            'name' => 'Cliente',
            'email' => 'cliente@example.com',
            'password' => Hash::make('password'),
            'rol_id' => 1,
        ]);
    }
    }