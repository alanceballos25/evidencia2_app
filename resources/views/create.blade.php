@extends('layout.app')

@section('title', 'create')

@section('content')
<h1>Este será el formulario CREATE</h1>

<form action="">
    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="description">Description</label>
    <input type="text" id="description" name="description">

    <label for="dificulty">Dificulty</label>
    <select name="dificulty" id="dificulty">
        <option value="beginner">Beginner</option>
        <option value="intermediate">Intermediate</option>
        <option value="advanced">Advanced</option>
    </select>

    <label for="instructor">Instructor</label>
    <input type="text" id="instructor" name="instructor">

    <label for="email">Email</label>
    <input type="text" id="email" name="email">

    <input type="submit" value="Add Course">
</form>
@endsection
