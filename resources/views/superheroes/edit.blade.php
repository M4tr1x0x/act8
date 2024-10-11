@extends('layout\app')

@section('content')
<div class="container">
    <h1>Edit Superhero</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="real_name">Real Name</label>
            <input type="text" name="real_name" value="{{ $superhero->real_name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hero_name">Hero Name</label>
            <input type="text" name="hero_name" value="{{ $superhero->hero_name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="photo_url">Photo URL</label>
            <input type="url" name="photo_url" value="{{ $superhero->photo_url }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="additional_info">Additional Information</label>
            <textarea name="additional_info" class="form-control">{{ $superhero->additional_info }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Superhero</button>
    </form>
</div>
@endsection
