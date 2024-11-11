@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center">Films</h1>
        </div>
        <div class="col-12 text-center my-3">
            <a href="{{ route('films.create') }}" class="btn btn-primary">Create a new film</a>
        </div>
        <div class="col-10">
            <ul class="row">
                @forelse ($films as $film)
                <li class="col-4 g-3">
                    <div id="film-card" class="card pt-2">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="img-fluid" src="{{ $film->poster}}" alt="img-{{ $film->id}}">
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Name film: </h5>
                                <p class="card-text fw-bolder">
                                    {{ $film->title }}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Description: </h5>
                                <p class="card-text fw-bolder">
                                    {{ $film->description }}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Director: </h5>
                                <p class="card-text fw-bolder">
                                    {{ $film->director}}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Release Year: </h5>
                                <p class="card-text fw-bolder">
                                    {{ $film->release_year}}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Genre:</h5>
                                <p class="card-text fw-bolder">
                                    {{ $film->genre}}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Rating:</h5>
                                <p class="card-text fw-bolder">
                                    {{ $film->rating}}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Duration:</h5>
                                <p class="card-text fw-bolder">
                                    {{ $film->duration}}
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                @empty
                <h1>There are not films in your collection! </h1>
                @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection
