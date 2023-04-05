@section('title', 'Edit item')
@extends('layouts.mainaddedit')

@section('content')
    <div class="container">
        {{-- Add Product --}}
        <a class="btn btn-warning  mt-2 mb-2" href="{{ route('ct') }}">Back
            to
            categories dashboard</a>
        {{-- Form add product --}}
        <form action="/categories/{{ $categoriesModel->id }}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nameInput1" class="form-label">Product Name</label>
                <input type="text" class="form-control @error('nameInput1') is-invalid @enderror" id="nameInput1"
                    name="nameInput1" value="{{ $categoriesModel->name }}">
                @error('nameInput1')
                    <div class="invalid-feedback">
                        Name field must be filled
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Edit item</button>
        </form>
    </div>
@endsection
