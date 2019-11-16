@extends('layouts.app')

@section('content')
    <h1>Delete post: </h1>

    <form method="POST" action="{{url("posts/$post->id")}}" >
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <p><input type="hidden" name="id" value="{{$post->id}}" ></p>
        <p><input type="text" name="title" value="{{$post['title']}}" placeholder="Post Title"></p>
        <p><input type="text" name="slug" value="{{$post['slug']}}" placeholder="Post Slug"></p>
        <p><input type="text" name="subtitle" value="{{$post['subtitle']}}" placeholder="Post Subtitle"></p>
        <p><textarea name="content" placeholder="Post Content">{{$post['content']}}</textarea></p>
        <p><input type="date" name="published_at" value="{{$post['published_at']}}"></p>
        <p><input type="file" name="image"></p>
        <p><input type="text" name="subtitle" value="{{$post['id']}}"></p>

        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" name="category" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>

@endsection