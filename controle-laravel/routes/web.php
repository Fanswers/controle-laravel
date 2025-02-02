<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profileUser', [App\Http\Controllers\ProfileController::class, 'index']);

Route::get('/recipe', '\App\Http\Controllers\RecipesController@show_recipe');

Route::post('/new_recipe', '\App\Http\Controllers\RecipesController@new_recipe');

Route::post('/modify_recipe', '\App\Http\Controllers\RecipesController@modify_recipe');

Route::get('/delete_recipe', '\App\Http\Controllers\RecipesController@delete_recipe');