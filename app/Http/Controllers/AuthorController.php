<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('id')->paginate(10);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Authors' => null,
        ];

        return view('authors.index', compact('authors', 'breadcrumbs'));
    }

    public function books(Author $author)
    {
        $books = $author->books()->orderBy('id')->paginate(10);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Authors' => route('authors.index'),
            $author->name . ' books' => null,
        ];

        return view('authors.books', compact('author', 'books', 'breadcrumbs'));
    }
}
