@section('title', 'Product')
@extends('layouts.main')

@section('content')
    <div class="container">
        {{-- Add Product --}}
        <a class="btn btn-primary mt-3 mb-3" href="{{ url('/products/cgdashboard') }}">Dashboard Products</a>
        {{-- Card Foreach --}}
        <div class="row">
            @foreach ($productsModel as $item)
                <div class="col-sm-6 mt-2 mb-3 mb-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{{ $item->name }}</h2>
                            <p>
                            <h3>Rp {{ number_format($item->price) }}</h3> <span><i><u>Stock {{ $item->qty }}
                                        pcs.</u></i></span></p>
                            <p class="card-text">{{ $item->description }}</p>

                            <form action="/cart" method="post">
                                @csrf
                                <input type="hidden" name="idInput" value="{{ $item->id }}">
                                <input class="ml-3 mr-3" type="number" name="numInput" id="numInput">
                                <button type="submit" class="btn btn-success">Add to Cart</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <script>
        let barang = document.getElementById('numInput');
        let store = barang.value;
        console.log(store);
    </script> --}}
@endsection
