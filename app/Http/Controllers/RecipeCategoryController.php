<?php

namespace App\Http\Controllers;

use App\Models\RecipeCategoryModel;
use App\Models\RecipeType;
use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    public function index(){
        $recipe_category = RecipeCategoryModel::all();
        return view('recipe_category.index', compact('recipe_category'));
    }

    public function new(Request $request){

        $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        RecipeCategoryModel::create($request->all());


        return redirect()->route('recipe_category.index');
    }}
