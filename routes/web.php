<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\receptcontroller;
use App\Http\Controllers\RecipeCategoryController;


//home pagina.
Route::get('/', function () {
    return view('home.index');
});

//cat page
Route::get('/home/cat', function() {
    return view('home.cat');
});

//recepten routes:
Route::get('/recepten', [receptcontroller::class, 'index'])->name('recepten.index');
Route::get('recepten/new', [receptcontroller::class, 'recepten_new']);
Route::get('/recepten/edit/{recipes}', [receptcontroller::class, 'edit']);
Route::put('/recepten/edit/{recipe}', [receptcontroller::class, 'update']);
Route::delete('/recepten/delete/{recipe}', [receptcontroller::class, 'destroy']);
Route::post('/recepten/new', [receptcontroller::class, 'new']);

//recipe category routes:
Route::post('/recipe_category/new', [RecipeCategoryController::class, 'new']);
Route::get('recipe_category/new', [RecipeCategoryController::class, 'category_new_view']);
Route::get('/recipe_category', [RecipeCategoryController::class, 'index'])->name('recipe_category.index');

//about routes:
Route::get('/about', function () {
    return view('about.index');
});





// Route::get('/test', [IngredientController::class , 'index'])->name('recepten.index');
// Route::get('/ingredients', [IngredientController::class , 'index']);
// Route::get('/ingredients/new', [IngredientController::class , 'create']);
// Route::post('/ingredients/new', [IngredientController::class , 'store'])->name('ingredient.store');
// Route::post('/test/edit/{$ingredient}', [IngredientController::class , 'update']);
// Route::get('/test/{$ingredient}', [IngredientController::class , 'show']);
