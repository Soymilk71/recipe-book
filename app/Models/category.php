<?php

namespace App\Models;

use App\Models\recipe;
use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    protected $table = 'recipe_category';
    

    protected $fillable = [
        'category',
    ];

    // public function recipes()
    // {
    //     //1 op veel relatie. een categorie heeft veel recepten (bijvoorbeeld taart. 
    //     //je hebt chocolade taart, maar ook kwarktaart. Beide vallen onder de categorie taart)
    //     //een recept kan niet meerdere categorieen hebben, chocolade taart valt niet onder de categorie chocola en taart. maar alleen onder taart. 
    //     //daarom is het een 1 op veel relatie.
    //     //return $this->hasMany(recipe::class);
    // }
}
