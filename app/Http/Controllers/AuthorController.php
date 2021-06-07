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

    public function show(Author $author)
    {
        $author = Author::findOrFail($author->id);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Authors' => route('authors.index'),
            $author->name => null,
        ];

        return view('authors.show', compact('author', 'breadcrumbs'));
    }

    public function create()
    {
        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Authors' => route('authors.index'),
            'Add new author' => null,
        ];

        return view('authors.create', compact('breadcrumbs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:authors,slug',
        ]);

        Author::create($request->only('name', 'slug', 'description'));

        return redirect()->route('authors.index');
    }

    public function edit(Author $author)
    {
        $author = Author::findOrFail($author->id);

        $breadcrumbs = [
            'Home' => route('dashboard'),
            'Authors' => route('authors.index'),
            $author->name => null,
        ];

        return view('authors.edit', compact('author', 'breadcrumbs'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:authors,slug,'.$author->id,
        ]);

        $author->update($request->only('name', 'slug', 'description'));

        return redirect()->route('authors.index');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return back()->with('status', 'Author has been removed');
    }
}
