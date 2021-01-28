<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    public function show_recipe(request $request)
    {
        $id = $request->id;
        $recette = Recipe::find($id);
        return view('recipe', ['recette' => $recette]);
    }

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

    public function modify_recipe(request $request)
    {
        $id = \Request::segment(2);
        echo($id);
        $recipe = Recipe::find($id);
        $recipe->update([
            'name' => request('name'),
            'description' => request('description'),
        ]);
        return back();
    }

    public function delete_recipe(request $request)
    {
        $id = $request->id;

        Recipe::where('id', $id)->delete();
        return back();
    }
}
