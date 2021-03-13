<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id')->paginate(10);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Books' => null,
        ];

        return view('books.index', compact('books', 'breadcrumbs'));
    }
}
