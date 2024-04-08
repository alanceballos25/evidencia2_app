@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Create New Book</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author_name">Author:</label>
                <input type="text" name="author_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="published_year">Published Year:</label>
                <input type="number" name="published_year" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
