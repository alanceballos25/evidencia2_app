<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BookController extends Controller
{
    public function index_1()
    {
        $books = Book::all();
        return view('index_1', compact('books'));
    }
    public function create()
    {
        return view('create_1');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author_name' => 'required',
            'isbn' => 'required|unique:books',
            'published_year' => 'required|integer|min:1900|max:' . date('Y')
        ]);

        try {
            Book::create($request->all());
            return redirect()->route('index_1')->with('success', 'Book created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('index_1')->with('error', 'Failed to create book.');
        }
    }

    public function edit($id)
    {
        try {
            $book = Book::findOrFail($id);
            return view('edit', compact('book'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('index_1')->with('error', 'Book not found.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author_name' => 'required',
            'isbn' => 'required|unique:books,isbn,'.$id,
            'published_year' => 'required|integer|min:1900|max:' . date('Y')
        ]);

        try {
            $book = Book::findOrFail($id);
            $book->update($request->all());
            return redirect()->route('index_1')->with('success', 'Book updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('index_1')->with('error', 'Book not found.');
        } catch (\Exception $e) {
            return redirect()->route('index_1')->with('error', 'Failed to update book.');
        }
    }

    public function destroy($id)
    {
        try {
            $book = Book::findOrFail($id);
            $book->delete();
            return redirect()->route('index_1')->with('success', 'Book deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('index_1')->with('error', 'Book not found.');
        } catch (\Exception $e) {
            return redirect()->route('index_1')->with('error', 'Failed to delete book.');
        }
    }
}
