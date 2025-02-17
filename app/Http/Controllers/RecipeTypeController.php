<?php

namespace App\Http\Controllers;

use App\Models\RecipeType;
use Illuminate\Http\Request;

class RecipeTypeController extends Controller
{
    public function index(){
        $recipe_types = RecipeType::all();
        return view('recipe_type.index', compact('recipe_types'));
    }

    public function new(Request $request){

        $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        RecipeType::create($request->all());


        return redirect()->route('recipe_type.index');
    }}
