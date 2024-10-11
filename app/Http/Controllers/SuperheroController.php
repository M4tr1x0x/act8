<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
        public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

        public function create()
    {
        return view('superheroes.create');
    }

        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|max:255',
            'hero_name' => 'required|max:255',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable',
        ]);

        Superhero::create($validatedData);

        return redirect('/superheroes')->with('success', 'Superhero added successfully');
    }

        public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }
    
        public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

        public function update(Request $request, Superhero $superhero)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|max:255',
            'hero_name' => 'required|max:255',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable',
        ]);

        $superhero->update($validatedData);

        return redirect('/superheroes')->with('success', 'Superhero updated successfully');
    }

        public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect('/superheroes')->with('success', 'Superhero deleted successfully');
    }



}
