<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::orderBy('id')->paginate(10);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Genres' => null,
        ];

        return view('genres.index', compact('genres', 'breadcrumbs'));
    }

    public function books(Genre $genre)
    {
        $books = $genre->books()->orderBy('id')->paginate(10);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Genres' => route('genres.index'),
            $genre->name . ' books' => null,
        ];

        return view('genres.books', compact('genre', 'books', 'breadcrumbs'));
    }

    public function show(Genre $genre)
    {
        $genre = Genre::findOrFail($genre->id);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Genres' => route('genres.index'),
            $genre->name => null,
        ];

        return view('genres.show', compact('genre', 'breadcrumbs'));
    }

    public function create()
    {
        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Genres' => route('genres.index'),
            'Add new genre' => null,
        ];

        return view('genres.create', compact('breadcrumbs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:genres,slug',
        ]);

        Genre::create($request->only('name', 'slug'));

        return redirect()->route('genres.index');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();

        return back()->with('status', 'Genre has been removed');
    }
}
