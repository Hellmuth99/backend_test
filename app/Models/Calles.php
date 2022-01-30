<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calles extends Model
{
    use HasFactory;

    // protected $table = 'calles';
    protected $fillable = [
        'calle_id',
        'calle_nombre',
        'ciudad_id',



    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
