<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeType extends Model
{
    protected $table = 'recipe_type';
    //
    protected $fillable = ['name'];
}
