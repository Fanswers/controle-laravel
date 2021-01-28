<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    public function new_recipe()
    {
        request()->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required']
        ]);

        Recipe::create([
            'name' => request('name'),
            'description' => request('description'),
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
