@extends('layouts.app')

@section('content')
    <a href="/categories" class="btn btn-info">Go Back</a>
    <h1>{{$category['title']}}</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$category['slug']}}</h5>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-success" onclick="location.href='{{ url('categories/'.$category['id'].'/edit') }}'">Edit</button>
    <a href="/categories/{{$category->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
@endsection