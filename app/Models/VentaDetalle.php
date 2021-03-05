<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    use HasFactory;

      protected $fillable = [
		'venta_id',
		'product_id',
		'cantidad',
		'precio',
		'descuento',
    ];

    public function venta()
    {
    	return $this->belongsTo(Venta::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
