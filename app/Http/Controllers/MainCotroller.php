<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainCotroller extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function privateHome() {
        return view('pages.privateHome');
    }
}
