@extends('layout\app')

@section('content')
<div class="container">
    <h1>Superheroes List</h1>
    <a href="{{ route('superheroes.create') }}" class="btn btn-success mb-3">Add New Superhero</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Real Name</th>
                <th>Hero Name</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $superhero)
            <tr>
                <td>{{ $superhero->real_name }}</td>
                <td>{{ $superhero->hero_name }}</td>
                <td><img src="{{ $superhero->photo_url }}" alt="{{ $superhero->hero_name }}" width="50"></td>
                <td>
                    <a href="{{ route('superheroes.show', $superhero->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
