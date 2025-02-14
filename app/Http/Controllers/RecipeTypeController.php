<?php

namespace App\Http\Controllers;

use App\Models\RecipeType;
use Illuminate\Http\Request;

class RecipeTypeController extends Controller
{
    public function new(Request $new){
        $incomingData = $new->validate([
            'name' => ['required', 'min:3'],
        ]);
        RecipeType::create($incomingData);

        return redirect()->route('recepten.index');
    }}
