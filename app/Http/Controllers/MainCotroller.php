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

    // create
    public function create(){
        return view('pages.createProject');
    }

    public function store(Request $request) {

        $data = $request -> validate([
            'name' => 'required|string|max:64',
            'description' => 'nullable|string',
            'main_image' => 'required|unique:projects',
            'release_date' => 'required|date|before:today',
            'repo_link' => 'required|unique:projects',
        ]);

        $project = new project();

        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];


        $project->save();

        return redirect()->route('private.home');
    }
}
