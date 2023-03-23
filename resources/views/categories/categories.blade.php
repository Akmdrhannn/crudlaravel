@section('title', 'Categories')

@extends('layouts.main')

@section('content')
    <div class="container">
        {{-- Add Categories --}}
        <a class="btn btn-primary mt-3 mb-3" href="{{ url('/categories/add') }}">Add Categories</a>
        {{-- Categories --}}
        @foreach ($categoriesModel as $item)
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/600x600/?{{ $item->name }}" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">{{ $item->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
