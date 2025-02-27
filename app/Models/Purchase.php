<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

     protected $fillable = [
     	'provider_id',
		'user_id',
		'fecha_compra',
		'impuesto',
		'total',
		'estado',
		'imagen',
    ];

	public function user()
	    {
	        return $this->belongsTo(User::class);
	    }

	public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function purchasedetails()
    {
        return $this->hasMany(Purchase_detail::class);
    }
}
