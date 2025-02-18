<?php

namespace App\Models;

use App\Models\recipe;
use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    protected $table = 'recipe_category';
    

    protected $fillable = [
        'name',
    ];
}
