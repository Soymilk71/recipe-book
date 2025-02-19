<?php

namespace App\Http\Controllers;

use App\Models\recipe;
use App\Models\category;
use Illuminate\Http\Request;

class receptcontroller extends Controller
{
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recepten.index');
    }
    public function update(Recipe $recipe, Request $request)
    {

            $ingevoerdeData = $request->validate([
            'titel' => ['required', 'min:3', 'max:25'],
            'beschrijving' => 'nullable',
            'recept' => 'required',
        ]);
        $recipe->update($ingevoerdeData);
        return redirect()->route('recepten.index');
        
    }
         
    //de variabelen in de edit functie wijst als eerste naar de recipe model, de tweede is dezelfde variabel die je hebt meegegeven in je url href in de web.php (bewerk knop)
    public function edit(Recipe $recipes){
        //hier return je de view edit en je geeft de variabele uit de url mee.
        return view ('recepten.edit', ['recipes' => $recipes]);

    }
    public function index()
    {
        $recipes = recipe::all();

        return view('recepten.index', ['recipes' => $recipes]);
    }
    public function indexCategories()
    {
        $categories = category::all();
        return view('recepten.new', ['categories' => $categories]);
    }
    
    //
    public function new(Request $new)
    {
        //dd($new->all());
        //variabele ingevoerdedata is gelijk aan de request, die word gevalideerd met de validate functie.
        $ingevoerdeData = $new->validate([
            $messages = [
                'titel.required' => 'Het recept moet een echt een titel hebben.',
                'titel.min' => 'De titel moet minimaal 3 karakters bevatten.',
                'recept.required' => 'Het recept moet wel een inhoud hebben.',   
                'category_id.required' => 'selecteer een categorie',         
        ],
            'titel' => ['required', 'min:3', 'max:100'],
            'beschrijving' => 'nullable',
            'recept' => 'required',
            'category_id' => 'required'
        ], $messages);

        recipe::create($ingevoerdeData);

        //de new functie is vrij simpel. je word geredirect naar recepten/index
        return redirect()->route('recepten.index')
        //met een melding terug als de gebruiker een recept heeft opgeslagen.
        ->with('success_title', 'Opgeslagen!') ;
    }
    
    public function recepten_new()
    {
        return view ('recepten.new');
    }
}
