@section('title', 'Add item')
@extends('layouts.main')

@section('content')
    <div class="container">
        {{-- Add Product --}}
        <a class="btn btn-warning  mt-2 mb-2" href="{{ url('products') }}">Back to product</a>
        {{-- Form add product --}}
        <form action="{{ url('/products') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameInput" class="form-label">Product Name</label>
                <input type="text" class="form-control @error('nameInput') is-invalid @enderror" id="nameInput"
                    name="nameInput">
                @error('nameInput')
                    <div class="invalid-feedback">
                        Name field must be filled
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descInput" class="form-label">Product Description</label>
                <input type="text" class="form-control @error('descInput') is-invalid @enderror" id="descInput"
                    name="descInput" rows="3">
                <div class="form-text">Description cannot be under 65 letter</div>
                @error('descInput')
                    <div class="invalid-feedback">
                        Description field must be filled
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="priceInput">Price</label>
                    <input type="float" class="form-control @error('priceInput') is-invalid @enderror" id="priceInput"
                        name="priceInput">
                    @error('priceInput')
                        <div class="invalid-feedback">
                            Price field must be a number
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qtyInput">Quantity</label>
                    <input type="number" class="form-control @error('qtyInput') is-invalid @enderror" id="qtyInput"
                        name="qtyInput">
                </div>
                @error('qtyInput')
                    <div class="invalid-feedback">
                        Quantity field must be minimal 1 pcs
                    </div>
                @enderror
                <div class="mb-3">
                    <select class="form-select @error('categoriesInput') is-invalid @enderror" name="categoriesInput"
                        id="categoriesInput">
                        <option selected disabled>Category</option>
                        @foreach ($categoriesModel as $item)
                            <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('categoriesInput')
                        <div class="invalid-feedback">
                            Choose item category
                        </div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection
