@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    @if(count($categories) > 0)
        <table width="100%">
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>SLUG</th>
                <th>CREATED_AT</th>
                <th>UPDATED_AT</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>

            @foreach($categories as $category)
                <tr>
                    <td>{{$category['id']}}</td>
                    <td><a href="/categories/{{$category->id}}" >{{$category['title']}}</a></td>
                    <td>{{$category['slug']}}</td>
                    <td>{{$category['created_at']}}</td>
                    <td>{{$category['updated_at']}}</td>
                    <td><a href="/categories/{{$category->id}}/edit" class="btn btn-info">Edit</a></td>
                    <td><a href="/categories/{{$category->id}}/delete"class="btn btn-danger" >Delete</a></td>
                </tr>
            @endforeach
        </table>

        <div class="row d-flex justify-content-center">
            <div class="col-12 text-center">
                {{ $categories->links() }}
            </div>
        </div>
    @else
        <p>No categories found</p>
    @endif
@endsection