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
}
