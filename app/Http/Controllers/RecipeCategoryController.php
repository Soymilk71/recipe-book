<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{


    public function new(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            //'category_id' => 'required|exists:recipe_category,id'
        ]);
        return redirect()->route('recipe_category.index');
    }

    public function category_new_view()
    {
        return view ('recipe_category.new');
    }
}
