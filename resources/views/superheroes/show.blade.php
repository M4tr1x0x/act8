@extends('layout\app')

@section('content')
<div class="container">
    <h1>Superhero Details</h1>

    <div class="card">
        <div class="card-body">
            <h2>{{ $superhero->hero_name }}</h2>
            <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
            <p><strong>Additional Information:</strong> {{ $superhero->additional_info }}</p>
            <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->hero_name }}" class="img-fluid">
        </div>
    </div>

    <a href="{{ route('superheroes.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
