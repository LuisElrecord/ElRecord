<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

     protected $fillable = [
        'nombre',
    ];


     public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
