<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainCotroller extends Controller
{
    // index
    public function home() {
        $projects = Project::all();
        return view('pages.home', compact('projects'));
    }

    public function privateHome() {
        $projects = Project::all();
        return view('pages.privateHome', compact('projects'));
    }

    // show
    public function show(Project $project) {
        return view('pages.showProject', compact('project'));
    }

    public function privateShow(Project $project) {
        return view('pages.privateShowProject', compact('project'));
    }

    // delete
    public function delete(Project $project) {
        $project->delete();
        return redirect() -> route('private.home');
    }
}
