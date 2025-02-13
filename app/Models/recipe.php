<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    protected $fillable = [
        'titel',
        'beschrijving',
        'recept',
    ];
}
