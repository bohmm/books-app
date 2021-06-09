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

    public function show(Book $book)
    {
        $book = Book::findOrFail($book->id);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Books' => route('books.index'),
            $book->title => null,
        ];

        return view('books.show', compact('book', 'breadcrumbs'));
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('status', 'Book has been removed');
    }
}
