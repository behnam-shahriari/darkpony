@extends('layouts.app')

@section('content')
    <h1>Edit post: </h1>

    <form method="POST" action="{{url('posts', [$post->id])}}" enctype="multipart/form-data">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
        @csrf
        <p><input type="text" name="title" value="{{$post['title']}}" placeholder="Post Title"></p>
        <p><input type="text" name="slug" value="{{$post['slug']}}" placeholder="Post Slug"></p>
        <p><input type="text" name="subtitle" value="{{$post['subtitle']}}" placeholder="Post Subtitle"></p>
        <p><textarea name="content" placeholder="Post Content">{{$post['content']}}</textarea></p>
        <p><input type="date" name="published_at" value="{{$post['published_at']}}"></p>
        <p><input type="file" name="image"></p>
        <p><select id="category" name="category">
                @foreach($categories as $category)
                    @if($category['id'] == $post['category_id'])
                        <option name="category" value="{{$category['id']}}"
                                selected>{{$category['title']}}</option>
                    @else
                        <option name="category" value="{{$category['id']}}">{{$category['title']}}</option>
                    @endif
                @endforeach

            </select></p>
        <input name="_method" type="hidden" value="PUT">
        <button type="submit" name="post">Update</button>
    </form>


@endsection