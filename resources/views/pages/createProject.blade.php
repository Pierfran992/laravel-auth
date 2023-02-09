@extends('layouts.main-layout')

@section('content')
    <h1 class="mb-5 text-danger">Create New Project</h1>

    {{-- creo il form con cui andar a creare il nuovo elemento da inviare al database --}}
    <form method="POST" action="{{route('project.store')}}">
        
        @csrf

        <div class="input-group my-2">
            <label for="name" class="input-group-text" id="basic-addon1">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="input-group my-2">
            <label for="description" class="input-group-text" id="basic-addon1">Description</label>
            <input type="text" class="form-control" name="description">
        </div>

        <div class="input-group my-2">
            <label for="release_date" class="input-group-text" id="basic-addon1">Release Date</label>
            <input type="date" class="form-control" name="release_date">
        </div>

        <div class="input-group my-2">
            <label for="main_image" class="input-group-text" id="basic-addon1">Main Image URL</label>
            <input type="text" class="form-control" name="main_image">
        </div>

        <div class="input-group my-2">
            <label for="repo_link" class="input-group-text" id="basic-addon1">Repo Link</label>
            <input type="text" class="form-control" name="repo_link">
        </div>

        <button class="btn btn-danger my-2" type="submit">CREATE</button>
        
    </form>
@endsection