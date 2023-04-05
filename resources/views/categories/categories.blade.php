@section('title', 'Categories')

@extends('layouts.main')

@section('content')
    <div class="container">
        {{-- Categories --}}
        <div class="row">
            @foreach ($categoriesModel as $item)
                <div class="card" style="width: 250px;">
                    <a href="#">
                        <img src="https://source.unsplash.com/250x250/?{{ $item->name }}" class="card-img-top"
                            alt="">
                        <div class="card-body">
                            <p class="card-text">{{ $item->name }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
