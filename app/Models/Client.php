<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

     protected $fillable = [
	    'identidad',
		'nombre',
		'apellido',
		'rtn',
		'cumpleaños',
		'telefono',
		'direccion',
		'correo',
		'puntos',
	];
}
