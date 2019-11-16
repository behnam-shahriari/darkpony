@extends('layouts.app')

@section('content')
    <h1>Edit post: </h1>

    <form method="POST" action="{{url('categories', [$category->id])}}" >
        {{method_field('PATCH')}}
        {{ csrf_field() }}
        @csrf
        <p><input type="text" name="title" value="{{$category['title']}}" placeholder="Category Title"></p>
        <p><input type="text" name="slug" value="{{$category['slug']}}" placeholder="Category Slug"></p>
        <input name="_method" type="hidden" value="PUT">
        <button type="submit" name="category">Update</button>
    </form>

@endsection