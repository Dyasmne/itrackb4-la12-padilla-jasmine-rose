@extends('layouts.app')

@section('content')

    <div class="container text-center mt-5">
        <h1>Page not found</h1>

        <p>Sorry, the page you are looking for does not exist.</p>

        <a href="{{ route('movies.index') }}" class="btn btn-primary">
            Back to the list
        </a>
    </div>

@endsection