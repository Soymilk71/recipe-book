<?php

namespace App\Models;

use App\Models\recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    protected $table = 'recipe_category';
    

    protected $fillable = [
        'name',
    ];
    public function recipes(): hasMany
    {
    return $this->hasMany(recipe::class, 'category_id');
    }
}


