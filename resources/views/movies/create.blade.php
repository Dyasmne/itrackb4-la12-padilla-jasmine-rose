
@extends('layouts.app')

@section('title', 'Add Movie')

@section('content')

    <h2 class="mb-4">Add a New Movie</h2>

    <form action="{{ route('movies.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Movie Title</label>
            <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                value="{{ old('title') }}"
                required
            >

            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre_id" class="form-label">Genre</label>

            <select name="genre_id" id="genre_id" class="form-select" required>
                <option value="">Select Genre</option>

                @foreach ($genres as $genre)
                    <option
                        value="{{ $genre->id }}"
                        @selected(old('genre_id') == $genre->id)
                    >
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>

            @error('genre_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>

            <input
                type="number"
                name="rating"
                id="rating"
                class="form-control"
                step="0.1"
                min="0"
                max="10"
                value="{{ old('rating') }}"
                required
            >

            @error('rating')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Add Movie
        </button>

        <a href="{{ route('movies.index') }}" class="btn btn-secondary">
            Back to Movies
        </a>

    </form>

@endsection
