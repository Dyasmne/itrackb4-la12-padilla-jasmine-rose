
@extends('layouts.app')

@section('title', 'Server Error')

@section('hideHeader')
    true
@endsection

@section('content')

    <div class="text-center mt-5">
        <h1>500 - Internal Server Error</h1>

        <p>
            Something went wrong on our server.
            Our team will work to resolve the issue.
        </p>

        <a href="{{ route('movies.index') }}" class="btn btn-primary">
            Back to the Movies List
        </a>
    </div>

@endsection
