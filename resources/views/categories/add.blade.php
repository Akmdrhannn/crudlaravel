@section('title', 'Add Categories')
@extends('layouts.main')

@section('content')
    <div class="container">
        {{-- Add Product --}}
        <a class="btn btn-warning  mt-2 mb-2" href="{{ url('/categories/cgdashboard') }}">Back to Categories Dashboard</a>
        {{-- Form add product --}}
        <form action="{{ url('/categories') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameInput1" class="form-label">Category Name</label>
                <input type="text" class="form-control @error('nameInput1') is-invalid @enderror" id="nameInput1"
                    name="nameInput1">
                @error('nameInput1')
                    <div class="invalid-feedback">
                        Name field must be filled
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection
