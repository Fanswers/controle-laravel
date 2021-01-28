<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Recipe as Recipe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        $userID = User::all();
        $recette = Recipe::all()->sortByDesc('updated_at');

        return view('home', [
            'user' => $user,
            'userID' => $userID,
            'recette' => $recette
        ]);
    }
}
