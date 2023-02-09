<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainCotroller extends Controller
{
    public function home() {
        $projects = Project::all();
        return view('pages.home', compact('projects'));
    }

    public function privateHome() {
        return view('pages.privateHome');
    }

    public function show(Project $project) {
        return view('pages.showProject', compact('project'));
    }
}
