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

Route::get('recepten/new', function () {
    return view('recepten.new');
});


Route::get('/recepten/edit/{recipes}', [receptcontroller::class, 'edit']);
Route::put('/recepten/edit/{recipe}', [receptcontroller::class, 'update']);
Route::delete('/recepten/delete/{recipe}', [receptcontroller::class, 'destroy']);

//de router pakt 2 argumenten, de eerste is de url, in string form, de tweede is een naamloze functie. deze geeft "succesvol gedeeld" terug maar dit kan ook een view zijn
Route::post('recepten/new', function(){
    return "succesvol gedeeld";
});

//deze router pakt 2 argumenten. de eerste is een string die de route aangeeft en de tweede is de een array met nog 2 
//argumenten. de eerste is de controller en de tweede is de functie die de controller moet uitvoeren je zegt in principe
//kijk in de receptcontroller en zoek naar de "new" functie en voer deze uit.
Route::post('/recepten/new', [receptcontroller::class, 'new']);

Route::post('/recipe_category/new', [RecipeCategoryController::class, 'new']);

Route::get('recipe_category/new', function () {
    return view('recipe_category.new');
});
//ingredienten routes:
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
