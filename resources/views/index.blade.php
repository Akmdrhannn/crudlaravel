@section('title', 'Homepage')

@extends('layouts.main')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
          <div class="row justify-content-center">
            <div class="col-xl-6">
              <div class="text-center text-white">
                <!-- Page heading-->
                <h1 class="mb-5" style="color:white;">
                  Shop at Hanshop and look our best item that good for you
                </h1>
                <!-- Search item -->
                <form class="form-item" id="form-item">
                  <!-- Email address input-->
                  <div class="row">
                    <div class="col">
                      <input
                        class="form-control form-control-lg"
                        id="item"
                        type="text"
                        placeholder="Find your item here"
                      />
                    </div>
                    <div class="col-auto">
                      <button
                        class="btn btn-primary btn-lg"
                        id="submitButton"
                        type="submit"
                      >
                        Submit
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Icons Grid-->
      <section class="features-icons bg-light text-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                  <img class="icon" src="{{ asset('css/assets/icon.png') }}" alt="" />
                </div>
                <h3>Discount Price</h3>
                <p class="lead mb-0">Keep up to date here to get discount item</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                  <img class="icon" src="{{ asset('css/assets/icon2.png') }}" alt="" />
                </div>
                <h3>Brand New</h3>
                <p class="lead mb-0">Always put a new item and original</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                  <img class="icon" src="{{ asset('css/assets/icon3.png') }}" alt="">
                </div>
                <h3>Easy to shop</h3>
                <p class="lead mb-0">
                  With easy system and payment make it's easier to use
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
