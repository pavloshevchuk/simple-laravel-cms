@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog</h1>
        @foreach ($entries as $entry)
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $entry['title'] }}</h2>
                    <p>{{ $entry['description'] }}</p>
                    <div>
                        <span class="badge">Created {{ $entry['created'] }}</span>
                        <span class="badge">Updated {{ $entry['updated'] }}</span>
                    </div>
                    <hr>
                </div>
            </div>
        @endforeach
    </div>
@endsection
