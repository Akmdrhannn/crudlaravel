@section('title', 'Dashboard products')

@extends('layouts.main')

@section('content')
    <div class="container">
        <table class="mb-3">
            <a href="{{ url('/products') }}"><button class="btn btn-success">Back to Products</button></a>
            <a href="{{ url('/products/add') }}"><button class="btn btn-primary">Add Products</button></a>
        </table>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Category</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            @foreach ($productsModel as $item)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>Rp {{ number_format($item->price) }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->categories_id }}</td>
                        <td><a href="/products/{{ $item->id }}/edit"class="btn btn-warning">Edit</a></td>
                        <td><a href="/products/{{ $item->id }}/delete"class="btn btn-danger">Delete</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
