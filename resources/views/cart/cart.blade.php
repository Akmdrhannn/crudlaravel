@section('title', 'MyCart')
@extends('layouts.main')
@section('content')
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">MyCart</h3>
                    </div>
                    @foreach ($cartModel as $item)
                        <form action="cart/{{ $item->id }}" method="get">
                            <input type="hidden" name="idInput" value="{{ $item->id }}">
                            <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="https://source.unsplash.com/250x250/?{{ $item->products->name }}"
                                                class="img-fluid rounded-3" alt="">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2"></p>

                                            <p>
                                                <span class="text-muted">Product name: </span> {{ $item->products->name }}
                                            </p>
                                            <p>
                                                <span class="text-muted">Price:
                                                </span>Rp {{ number_format($item->products->price) }}
                                            </p>

                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                            <input id="form1" min="0" name="qty" value="{{ $item->qty }}"
                                                type="number" class="form-control form-control-sm" />

                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 ps-1" style="display:flex">
                                            <h5 class="mb-0">Rp {{ number_format($item->products->price * $item->qty) }}
                                            </h5>
                                            <div style="display:grid;">
                                                <h5 style="margin-left: 23px" class="mb-0"><a href="cart"><button
                                                            class="btn btn-warning" type="submit">Save</button></a>
                                                </h5>
                                                <h5 style="margin-left: 23px" class="mb-0"><a
                                                        href="/cart/{{ $item->id }}/delete"
                                                        class="btn btn-danger">Delete</a>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endforeach
                    <div class="card">
                        <div class="card-body" style="display:flex;">
                            <div>
                                <button type="button" class="btn btn-success btn-block btn-lg">Checkout item</button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="ml-15" style="margin-top: 15px">Total : Rp </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
