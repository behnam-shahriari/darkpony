@extends('layouts.app')

@section('content')
    <h1>Create a new category: </h1>

    <form method="POST" action="store">
        @csrf
        <p><input type="text" name="title" placeholder="Category Title"></p>
        <p><input type="text" name="slug" placeholder="Category Slug"></p>

        <button type="submit" name="category">Create a new category</button>
    </form>

@endsection