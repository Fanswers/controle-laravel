<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('profileUser');
    }
}
