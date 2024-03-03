<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Usuarios extends Eloquent
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $fillable = [
        'name',
        'email',
        'password',
        'rol_id',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function solicitudes()
    {
        return $this->morphMany(Solicitudes::class, 'solicitante');
    }

    protected $connection = "mongodb";
    protected $collection = "Usuarios";
    protected $primarykey = "_id";


}
