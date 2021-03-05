<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

     protected $fillable = [
		'client_id',
		'user_id',
		'fecha_venta',
		'impuesto',
		'total',
		'estado',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

	public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function ventadetalles()
    {
        return $this->hasMany(VentaDetalle::class);
    }
}
