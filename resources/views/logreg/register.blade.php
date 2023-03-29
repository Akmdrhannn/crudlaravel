@section('title', 'Register')
@extends('layouts.formlogreg.mainlog')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Register Hanshop</h2>
                <div class="card my-4">

                    <form class="card-body cardbody-color p-lg-5">

                        {{-- <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div> --}}

                        <div class="mb-3">
                            <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username"
                                name="username" aria-describedby="emailHelp" placeholder="Username">
                            @error('username')
                                <div class="invalid-feedback">
                                    Username field must be filled
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    Password field must be filled
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    Password field must be filled
                                </div>
                            @enderror
                        </div>
                        <div class="text-center"><button type="submit"
                                class="btn btn-color px-5 mb-5 w-100">Register</button>
                        </div>
                        <div id="emailHelp" class="form-text text-center mb-5 text-dark">
                            Registered? <a href="#" class="text-dark fw-bold"> Login Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
