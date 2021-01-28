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

    public function modify_recipe()
    {
        $tempid = 1;

        $recipe = Recipe::find($tempid);
        $recipe->update([
            'name' => request('name'),
            'description' => request('description'),
        ]);
        return back();
    }
}
