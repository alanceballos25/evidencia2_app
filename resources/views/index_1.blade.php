@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Books</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Published Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author_name }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->published_year }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
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

