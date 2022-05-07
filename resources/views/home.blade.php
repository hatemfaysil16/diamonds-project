@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="head-content">
        <h1 class="text-light head-content__title">Explore</h1>

        <h2 class="text-light head-content__sub-title">your amazing city</h2>
      </div>
      <p class="text-light head-content__desc mt-4">Find great places to stay. eat shop or visit from local expert</p>


      @include('./partials/search-results')

      <!-- Start Services -->
      <div class="services  ">
        <h6 class="text-light font-weight-light">Or browser that highlights</h6>
        <ul class="list-unstyled services__list d-flex">
          <li class="services__item pointer bg-light text-muted mr-3">
              <a href="{{ url('/restaurants') }}" class="text-muted">
                <i class=" fa fa-cutlery"></i>
                <span class="services__txt pl-2">Restaurant</span>
            </a>
          </li>

          <li class="services__item pointer bg-light text-muted mr-3">
            <a href="{{ url('/hotels') }}" class="text-muted">
              <i class=" fa fa-building-o"></i>
              <span class="services__txt pl-2">Hotels</span>
          </a>
        </li>

        <li class="services__item pointer bg-light text-muted mr-3">
            <a href="{{ url('/villas') }}" class="text-muted">
              <i class=" fa fa-home"></i>
              <span class="services__txt pl-2">Villas</span>
          </a>
        </li>

        <li class="services__item pointer bg-light text-muted mr-3">
            <a href="{{ url('/hospitals') }}" class="text-muted">
              <i class=" fa fa-hospital-o"></i>
              <span class="services__txt pl-2">Hospitals</span>
          </a>
        </li>

        <li class="services__item pointer bg-light text-muted mr-3">
            <a href="{{ url('/stores') }}" class="text-muted">
              <i class=" fa fa-shopping-bag"></i>
              <span class="services__txt pl-2">Stores</span>
          </a>
        </li>



        </ul>
      </div>
      <!-- End Services-->

    </div>
  </section> <!-- end top section -->

  <div class="container">

    <!-- Start Features -->
    <section class="feat">
      <div class="feat__box row d-flex">


        <div class="col-3 feat__box-item">
          <div class="feat__item h-100 card">
            <div class="card-body d-flex flex-column justify-content-between text-center">
              <i class="feat__icon fa fa-percent fa-4x mb-4"></i>
              <h3 class="feat__title h5 mb-4">Best Price Guarantee</h3>
              <p class="feat__desc text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio commodi id corporis perferendis magni
                explicabo
              </p>
            </div>
          </div>
        </div>


        <div class="col-3 feat__box-item">
          <div class="feat__item h-100 card">
            <div class="card-body d-flex flex-column justify-content-between text-center">
              <i class="feat__icon fa fa-heart-o fa-4x mb-4"></i>
              <h3 class="feat__title h5 mb-4">Travellers Love Us</h3>
              <p class="feat__desc text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio commodi id corporis perferendis magni
                explicabo
              </p>
            </div>
          </div>
        </div>

        <div class="col-3 feat__box-item">
          <div class="feat__item h-100 card">
            <div class="card-body d-flex flex-column justify-content-between text-center">
              <i class="feat__icon fa fa-user-secret fa-4x mb-4"></i>

              <h3 class="feat__title h5 mb-4">Best Travel Agent</h3>
              <p class="feat__desc text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio commodi id corporis perferendis magni
                explicabo
              </p>
            </div>
          </div>
        </div>

        <div class="col-3 feat__box-item">
          <div class="feat__item h-100 card">
            <div class="card-body d-flex flex-column justify-content-between text-center">
              <i class="feat__icon fa fa-headphones fa-4x mb-4"></i>
              <h3 class="feat__title h5 mb-4">Our Dedicated Support</h3>
              <p class="feat__desc text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio commodi id corporis perferendis magni
                explicabo
              </p>
            </div>
          </div>
        </div>



    <!-- End Features -->
  </div>
@endsection
