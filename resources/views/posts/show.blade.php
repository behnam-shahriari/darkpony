@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go Back</a>
    <h1>{{$post['title']}}</h1>

    <div class="card" style="width: 18rem;">
        <img style="width: 100%" src="/storage/images/{{$post['image']}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$post['slug']}}</h5>
            <p class="card-text">{{$post['content']}}</p>
            <p class="card-text">{{$post['category']['title']}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$post['subtitle']}}</li>
            <li class="list-group-item">{{$post['published_at']}}</li>
        </ul>
    </div>
    <br>
    <button type="button" class="btn btn-success" onclick="location.href='{{ url('posts/'.$post['id'].'/edit') }}'">Edit</button>
    <a href="/posts/{{$post->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>


@endsection