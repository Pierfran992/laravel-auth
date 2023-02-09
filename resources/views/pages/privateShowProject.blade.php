@extends('layouts.main-layout')

@section('content')
    <h1 class="mb-5 text-danger">Administrator Show</h1>

    <div class="container d-flex flex-wrap align-items-stretch gap-3">
        {{-- CARD CONTENENTE LE INFO DEL PROGETTO --}}
        <div class="card text-start" style="width: 18rem;">
            <img src="{{ $project -> main_image}}" class="card-img-top" alt="{{ $project -> name}}">
            <div class="card-body">

                <h5 class="card-title">
                    <strong>
                        {{ $project -> name}}
                    </strong>
                </h5>

                <p class="card-text">
                    <strong>
                        Release Date:
                    </strong> 
                    {{ $project -> release_date}}
                </p>

                <p class="card-text">
                    {{ $project -> description ? $project -> description : 'Description not found'}}
                </p>

                <p class="card-text">
                    <strong>
                        Project link:
                    </strong> <br>
                    <a href="">
                        {{ $project -> repo_link}}
                    </a>
                </p>

                <a href="{{route('project.delete', $project)}}" class="btn btn-danger">Delete Project</a>
            </div>
        </div>

    </div>
@endsection