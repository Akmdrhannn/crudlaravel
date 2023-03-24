@section('title', 'Dashboard Category')

@extends('layouts.main')

@section('content')
    <div class="container">
        <table>
            <a href="{{ url('/categories') }}"><button class="btn btn-success">Back to Category</button></a>
            <a href="{{ url('/categories/add') }}"><button class="btn btn-primary">Add Category</button></a>
        </table>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            @foreach ($categoriesModel as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td><a href="/categories/{{ $item->id }}/edit"class="btn btn-warning">Edit</a></td>
                        <td><a href="/categories/{{ $item->id }}/delete"class="btn btn-danger">Delete</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
