@extends('layouts.app')

@section('content')
<div class="container">
    <center><h1 class="mb-4">🎥 Add New Movie</h1>
    <div class="card shadow-sm p-4">
        <form action="{{ route('movies.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Put Movie Title" required>
            </div>

            <div class="form-group mb-3">
                <label for="genre">Genre:</label>
                <input type="text" name="genre" class="form-control" placeholder="Put Movie Genre" required>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" rows="5" placeholder="Put Movie Description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ old('director') }}" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>
@endsection
