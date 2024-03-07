<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Rol extends Eloquent
{
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function usuarios()
    {
       
        return $this->hasMany(Usuario::class);
    }

    protected $connection = "mongodb";
    protected $collection = "Roles"; 
    protected $primarykey = "_id";
}