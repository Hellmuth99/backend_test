<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{

    use HasFactory;

    protected $fillable = [
        'provincia_nombre',
        'region_id',

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
