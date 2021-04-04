<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $books = Book::count();
        $authors = Author::count();
        $genres = Genre::count();

        $breadcrumbs = [
            'Home' => null,
        ];

        return view('dashboard', compact('books', 'authors', 'genres', 'breadcrumbs'));
    }
}
