<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Solicitudes extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'fecha_servicio',
        'hora_inicio',
        'hora_fin',
        'estado', 
        'solicitante_id',
        'solicitante_type',
        'niñera_id', 
 
    ];    

    public function solicitante()
    {
        return $this->morphTo();
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function niñera()
    {
        return $this->belongsTo(Usuario::class, 'niñera_id');
    }

    protected $connection = "mongodb";
    protected $collection = "Solicitudes";
    protected $primarykey = "_id";
}