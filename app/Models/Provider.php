<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

     protected $fillable = [
        'nombre',
		'rtn',
		'contacto',
		'pais',
		'ciudad',
		'direccion',
		'correo',
		'telefono',
    ];

 public function products()
    {
        return $this->hasMany(Product::class);
    }

}
