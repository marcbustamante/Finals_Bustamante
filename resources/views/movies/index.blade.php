@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">🎥 Movie-Reviews</h1>

    <div class="d-flex justify-content-center mb-4">
        <a href="{{ route('movies.create') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-plus-circle"></i> Add Movie
        </a>
    </div>

    @if($movies->isEmpty())
        <div class="alert alert-warning text-center">
            <strong>Not Found.</strong> Please add some more movies to the collection.
        </div>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($movies as $movie)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($movie->description, 100) }}</p>
                        </div>

                        <div class="card-footer bg-white text-center d-flex justify-content-around">
                            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-outline-primary">
                                <i class="fas fa-info-circle"></i> View Details
                            </a>

                            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-outline-success">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this movie?')">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
