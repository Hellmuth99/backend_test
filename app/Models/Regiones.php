<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'region_nombre',

    ];

    // protected $hidden = [
    //     'created_at',
    //     'updated_at',
    // ];
}
