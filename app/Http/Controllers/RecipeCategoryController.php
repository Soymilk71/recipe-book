<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\recipe;
use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    public function destroy(category $recipe_category)
    {
        recipe::where('category_id', $recipe_category->id)->update(['category_id' => null]);

        $recipe_category->delete();
        return redirect()->route('recipe_category.index');
    }

    public function edit(category $recipe_category){
        //hier return je de view edit en je geeft de variabele uit de url mee.
        return view ('recipe_category.edit', [
            'recipe_category' => $recipe_category
        ]);
    }


    public function update(category $recipe_category, Request $request)
    {
            $ingevoerdeData = $request->validate([
            'name' => ['required', 'min:3', 'max:25'],
            //'beschrijving' => 'nullable',
            //'recept' => 'required',
        ]);
        $recipe_category->update($ingevoerdeData);
        return redirect()->route('recepten.index');
    }
    public function new(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
        ]);
        category::create($request);
        return redirect()->route('recipe_category.index');
    }

    public function index()
    {
        $categories = category::paginate(30);

        return view('recipe_category.index', [
            'categories' => $categories
        ]);
    }

    public function categoryView()
    {
        return view ('recipe_category.index');
    }

    public function category_new_view()
    {
        return view ('recipe_category.new');
    }
}
