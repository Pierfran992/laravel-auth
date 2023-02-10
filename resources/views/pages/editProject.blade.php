@extends('layouts.main-layout')

@section('content')
    <h1 class="mb-5 text-danger">Edit Select Project</h1>

    {{-- messaggi di errore --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- creo il form con cui andar a creare il nuovo elemento da inviare al database --}}
    <form method="POST" action="{{route('project.update', $project)}}" enctype="multipart/form-data">
        
        @csrf

        <div class="input-group my-2">
            <label for="name" class="input-group-text" id="basic-addon1">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $project -> name}}">
        </div>

        <div class="input-group my-2">
            <label for="description" class="input-group-text" id="basic-addon1">Description</label>
            <input type="text" class="form-control" name="description" value="{{ $project -> description ? $project -> description : ''}}">
        </div>

        <div class="input-group my-2">
            <label for="release_date" class="input-group-text" id="basic-addon1">Release Date</label>
            <input type="date" class="form-control" name="release_date" value="{{ $project -> release_date}}">
        </div>

        <div class="input-group my-2">
            <label for="main_image" class="input-group-text" id="basic-addon1">Main Image</label>
            <input type="file" class="form-control" name="main_image" value="{{ $project -> main_image}}">
        </div>

        <div class="input-group my-2">
            <label for="repo_link" class="input-group-text" id="basic-addon1">Repo Link</label>
            <input type="text" class="form-control" name="repo_link" value="{{ $project -> repo_link}}">
        </div>

        <button class="btn btn-danger my-2" type="submit">EDIT</button>
        
    </form>
@endsection