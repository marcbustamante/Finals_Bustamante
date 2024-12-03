@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <p>Genre: {{ $movie->genre }}</p>
    <p>Director: {{ $movie->director }}</p>

    <h2>Reviews</h2>
    <ul>
        @foreach($movie->reviews as $review)
            <li>{{ $review->review }} (Rating: {{ $review->rating }})</li>
        @endforeach
    </ul>

    @auth
    <form action="{{ route('movies.reviews.store', $movie->id) }}" method="POST">
        @csrf
        <textarea name="review" rows="5" required></textarea>
        <br>
        <label for="rating">Rating: </label>
        <input type="number" name="rating" min="1" max="5" required>
        <br>
        <button type="submit" class="btn btn-primary">Add Review</button>
    </form>
    @endauth
</div>
@endsection
