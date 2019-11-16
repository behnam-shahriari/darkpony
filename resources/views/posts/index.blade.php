@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        <table width="100%" >
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>SLUG</th>
                <th>SUBTITLE</th>
                <th>CONTENT</th>
                <th>PUBLISHED_AT</th>
                <th>IMAGE</th>
                <th>CATEGORY</th>
                <th>CREATED_AT</th>
                <th>UPDATED_AT</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post['id']}}</td>
                    <td><a href="/posts/{{$post->id}}">{{$post['title']}}</a></td>
                    <td>{{$post['slug']}}</td>
                    <td>{{$post['subtitle']}}</td>
                    <td>{{$post['content']}}</td>
                    <td>{{$post['published_at']}}</td>
                    <td><img style="width: 100%" src="/storage/images/{{$post['image']}}"></td>
                    <td><a href="/categories/{{$post['category_id']}}">{{$post['category']['title']}}</a></td>
                    <td>{{$post['created_at']}}</td>
                    <td>{{$post['updated_at']}}</td>
                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></td>
                    <td><a href="/posts/{{$post->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            @endforeach
        </table>

        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center">
                {{ $posts->links() }}
            </div>
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection