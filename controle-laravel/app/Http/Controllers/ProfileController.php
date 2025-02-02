<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $recette = Recipe::All()->where('user_id', auth()->id())->sortByDesc('updated_at');;
        return view('profileUser', ['recette' => $recette]);
    }
}
