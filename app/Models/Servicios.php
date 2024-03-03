<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Servicios extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
    ];

    public function solicitudes()
    {
        return $this->hasMany(Solicitudes::class);
    }
    protected $connection = "mongodb";
    protected $collection = "Servicios";
    protected $primarykey = "_id";

}
