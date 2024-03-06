@extends('layouts.guest')

@section('main-content')

    <h1 class="text-light">Projects</h1>
    <div class="row row-cols-4">
        @foreach ($projects as $project)
        <div class="col mb-3">    
            <div class="card">
                <img src="https://beecrowd.io/wp-content/uploads/2022/08/Beecrowd-Agosto-6-02-larger.png" alt="{{ $project->title }}" class="card-img-top">
    
                <div class="card-body">
                    <h3> {{ $project->title }}</h3>
                    <p>
                        {{ $project->description }}
                    </p>
                </div>
                <a class="btn btn-info" href="{{ route('projects.show', ['project' => $project->id]) }}">
                    Vedi
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
