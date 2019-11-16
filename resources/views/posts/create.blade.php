@extends('layouts.app')

@section('content')
    <h1>Create a new post: </h1>

    <form method="POST" action="store" enctype="multipart/form-data">
        @csrf
        <p><input type="text" name="title" placeholder="Post Title"></p>
        <p><input type="text" name="slug" placeholder="Post Slug"></p>
        <p><input type="text" name="subtitle" placeholder="Post Subtitle"></p>
        <p><textarea name="content" placeholder="Post Content"></textarea></p>
        <p><input type="date" name="published_at"></p>
        <p><input type="file" name="image"></p>
        <select id="category" name="category">
            @foreach($categories as $category)
                <option name="category" value="{{$category['id']}}">{{$category['title']}}</option>
            @endforeach

        </select>
        <button type="submit" name="post">Create a new post</button>
    </form>

@endsection