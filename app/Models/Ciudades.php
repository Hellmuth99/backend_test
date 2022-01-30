<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciudad_nombre',
        'provincia_id',


    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
