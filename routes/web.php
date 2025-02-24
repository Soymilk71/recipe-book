<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\receptcontroller;
use App\Http\Controllers\RecipeCategoryController;


//home pagina.
Route::get('/', function ()
{
    return view('home.index');
});

//cat page
Route::get('/home/cat', function()
{
    return view('home.cat');
});

//recepten routes:
Route::get('/recepten', [receptcontroller::class, 'index'])->name('recepten.index');
Route::get('recepten/new', [receptcontroller::class, 'recepten_new']);
Route::get('/recepten/edit/{recipes}', [receptcontroller::class, 'edit']);
Route::put('/recepten/edit/{recipes}', [receptcontroller::class, 'update']);
Route::delete('/recepten/delete/{recipes}', [receptcontroller::class, 'destroy']);
Route::post('/recepten/new', [receptcontroller::class, 'new']);
Route::get('recepten/new', [receptcontroller::class, 'indexCategories']);

//recipe category routes:
Route::post('/recipe_category/new', [RecipeCategoryController::class, 'new']);
Route::get('recipe_category/new', [RecipeCategoryController::class, 'category_new_view']);
Route::get('/recipe_category', [RecipeCategoryController::class, 'index'])->name('recipe_category.index');
Route::get('/recipe_category/edit/{recipe_category}', [RecipeCategoryController::class, 'edit']);
Route::put('/recipe_category/edit/{recipe_category}', [RecipeCategoryController::class, 'update']);
Route::delete('/recipe_category/delete/{recipe_category}', [RecipeCategoryController::class, 'destroy']);


//about routes:
Route::get('/about', function ()
{
    return view('about.index');
});





// Route::get('/test', [IngredientController::class , 'index'])->name('recepten.index');
// Route::get('/ingredients', [IngredientController::class , 'index']);
// Route::get('/ingredients/new', [IngredientController::class , 'create']);
// Route::post('/ingredients/new', [IngredientController::class , 'store'])->name('ingredient.store');
// Route::post('/test/edit/{$ingredient}', [IngredientController::class , 'update']);
// Route::get('/test/{$ingredient}', [IngredientController::class , 'show']);
