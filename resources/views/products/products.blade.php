@section('title', 'Product')
@extends('layouts.main')

@section('content')
    <div class="container">
        {{-- Add Product --}}
        <a class="btn btn-primary mt-3 mb-3" href="{{ url('/products/add') }}">Add Product</a>
        {{-- Card Foreach --}}
        <div class="row">
            @foreach ($productsModel as $item)
                <div class="col-sm-6 mt-2 mb-3 mb-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{{ $item->name }}</h2>
                            <p>
                            <h3>Rp {{ $item->price }}</h3> <span><i><u>Stock {{ $item->qty }} pcs</u></i></span></p>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="/products/{{ $item->id }}/edit"class="btn btn-primary">Edit</a>
                            <a href="/products/{{ $item->id }}/delete" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
