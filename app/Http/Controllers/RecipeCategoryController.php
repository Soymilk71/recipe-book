<?php

namespace App\Http\Controllers;

use App\Models\RecipeCategoryModel;
use App\Models\RecipeType;
use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    public function index()
    {
        $recipe_category = RecipeCategoryModel::all();
        return view('recipe_category.index', compact('recipe_category'));
    }

    public function new(Request $request){

        $request->validate([
            'Category' => 'required'
        ]);


        RecipeCategoryModel::create($request);


        return redirect()->route('recipe_category.index');
    }

    public function home()
    {
        return view ('recipe_category.new');
    }
}
