<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeCategoryModel extends Model
{
    protected $table = 'recipe_type';
    //
    protected $fillable = ['name'];
}
