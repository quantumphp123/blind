@extends('user.layout.layout')

@section('title','Home-Page')

@section('content')

<main id="content">
  <section class="overflow-hidden">
    <div class="slick-slider custom-slider-02 dots-white"
      data-slick-options='{"slidesToShow": 1,"infinite":true,"autoplay":false,"dots":false,"arrows":false,"fade":false}'>
      <div class="box">
        <div class="d-flex flex-column justify-content-center bg-img-cover-center vh-100 custom-height-sm"
          style="background-image: url({{'/projects/blind/assets/user/images/banner-3.jpg'}})">
          <div class="d-flex flex-column h-100 justify-content-end pb-10 pb-lg-12">
            <div class="container container-xxl">
              <p class="text-white font-weight-bold fs-20 mb-3" data-animate="fadeInUp">Modern Design</p>
              <h1 class="mb-7 fs-60 fs-xxl-100 lh-1 text-white" data-animate="fadeInUp">Sweet Home</h1>
              <a href="#" class="btn btn-white text-uppercase letter-spacing-05" data-animate="fadeInUp">Shop
                Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="d-flex flex-column justify-content-center bg-img-cover-center vh-100 custom-height-sm"
          style="background-image: url({{'/projects/blind/assets/user/images/banner-3.jpg'}}">
          <div class="d-flex flex-column h-100 justify-content-end pb-10 pb-lg-12">
            <div class="container container-xxl">
              <p class="text-white font-weight-bold fs-20 mb-3" data-animate="fadeInUp">Modern Design</p>
              <h2 class="mb-7 fs-60 fs-xxl-100 lh-1 text-white" data-animate="fadeInUp">Sweet Home</h2>
              <a href="#" class="btn btn-white text-uppercase letter-spacing-05" data-animate="fadeInUp">Shop
                Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="d-flex flex-column justify-content-center bg-img-cover-center vh-100 custom-height-sm"
          style="background-image: url({{'/projects/blind/assets/user/images/banner-3.jpg'}}">
          <div class="d-flex flex-column h-100 justify-content-end pb-10 pb-lg-12">
            <div class="container container-xxl">
              <p class="text-white font-weight-bold fs-20 mb-3" data-animate="fadeInUp">Modern Design</p>
              <h2 class="mb-7 fs-60 fs-xxl-100 lh-1 text-white" data-animate="fadeInUp">Sweet Home</h2>
              <a href="#" class="btn btn-white text-uppercase letter-spacing-05" data-animate="fadeInUp">Shop
                Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <section class="py-6">
    <div class="container-fluid px-6">
      <div class="slick-slider"
        data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":true,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
        @for ($i = 0; $i < 3; $i++)
        @foreach (session()->get('categories') as $category)
        <div class="box" data-animate="fadeInUp">
          <div class="card border-0">
            <img src="{{ url('assets/user/images/c_08.jpg') }}" alt="Accessories" class="card-img">
            <div class="card-img-overlay d-inline-flex flex-column px-6 py-4">
              <h3 class="card-title fs-28">{{ ucwords($category['name']) }}</h3>
              <div class="mt-auto">
                <a href="{{ route('show-product', str_replace(" ", "-", $category['name'])) }}"
                  class="text-uppercase fs-14 letter-spacing-05 border-bottom border-light-dark border-hover-primary font-weight-bold">Shop
                  Now</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @endfor
        <div class="box" data-animate="fadeInUp">
          <div class="card border-0">
            <img src="{{ url('assets/user/images/c_07.jpg') }}" alt="Chairs" class="card-img">
            <div class="card-img-overlay d-inline-flex flex-column px-6 py-4">
              <h3 class="card-title fs-28">Chairs</h3>
              <div class="mt-auto">
                <a href="shop-page-03.html"
                  class="text-uppercase fs-14 letter-spacing-05 border-bottom border-light-dark border-hover-primary font-weight-bold">Shop
                  Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="box" data-animate="fadeInUp">
          <div class="card border-0">
            <img src="{{ url('assets/user/images/c_09.jpg') }}" alt="Tables" class="card-img">
            <div class="card-img-overlay d-inline-flex flex-column px-6 py-4">
              <h3 class="card-title fs-28">Tables</h3>
              <div class="mt-auto">
                <a href="shop-page-03.html"
                  class="text-uppercase fs-14 letter-spacing-05 border-bottom border-light-dark border-hover-primary font-weight-bold">Shop
                  Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="box" data-animate="fadeInUp">
          <div class="card border-0">
            <img src="{{ url('assets/user/images/c_10.jpg') }}" alt="Sofa" class="card-img">
            <div class="card-img-overlay d-inline-flex flex-column px-6 py-4">
              <h3 class="card-title fs-28">Sofa</h3>
              <div class="mt-auto">
                <a href="shop-page-03.html"
                  class="text-uppercase fs-14 letter-spacing-05 border-bottom border-light-dark border-hover-primary font-weight-bold">Shop
                  Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="box" data-animate="fadeInUp">
          <div class="card border-0">
            <img src="{{ url('assets/user/images/c_07.jpg') }}" alt="Chairs" class="card-img">
            <div class="card-img-overlay d-inline-flex flex-column px-6 py-4">
              <h3 class="card-title fs-28">Chairs</h3>
              <div class="mt-auto">
                <a href="shop-page-03.html"
                  class="text-uppercase fs-14 letter-spacing-05 border-bottom border-light-dark border-hover-primary font-weight-bold">Shop
                  Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <section class="pt-11 pt-lg-12 pb-lg-10">
    <div class="container">
      <h2 class="mb-9 text-center fs-30 fs-md-40">Shop Blinds With Us</h2>
      <div class="row overflow-hidden">
        {{-- foreach loop --}}
        @foreach (session()->get('products') as $product)
        <a href="{{ route('show-product', str_replace(" ", "-", $product['name'])) }}">
          <div class="col-sm-6 col-lg-3 mb-8" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div class="card-img-top position-relative">
                <div style="background-image: url({{'/projects/blind/assets/user/images/'.$product['img_name']}})"
                  class="card-img ratio bg-img-cover-center ratio-1-1">
                </div>
                <div
                  class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal">
                  {{-- <a href="#" data-toggle="tooltip" title="Add to cart"
                    class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                    <i class="far fa-shopping-basket"></i>
                  </a>
                  <a href="#" data-toggle="tooltip" title="Add to favourite"
                    class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                    <i class="far fa-heart"></i>
                  </a>
                  <a href="#" data-toggle="tooltip" title="Add to compare"
                    class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                    <i class="far fa-random"></i>
                  </a> --}}
                  <a href="{{ route('show-product', str_replace(" ", "-", $product['name'])) }}" data-toggle="tooltip" title="Preview"
                    class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                    <i class="far fa-eye"></i>
                  </a>
                </div>
              </div>
              <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                <div class="mr-auto">
                  {{-- <a href="#"
                    class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">Table</a> --}}
                  <a href="{{ route('show-product', str_replace(" ", "-", $product['name'])) }}" class="font-weight-bold mt-1 d-block">{{ ucwords($product['name']) }}</a>
                </div>
              </div>
            </div>
          </div>
          </a>
        @endforeach
          {{-- end foreach loop --}}
      </div>
    </div>
    </div>
    </div>
  </section>
  {{-- <section class="py-10 py-lg-15 bg-img-cover-center bg-custom-01"
    style="background-image: url({{ '/projects/blind/assets/user/images/bg-countdown.jpg' }});">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <h2 class="fs-30 fs-md-56 mb-7 text-center">
            Bobby Stool
          </h2>
          <div class="countdown d-flex justify-content-center mb-8" data-countdown="true"
            data-countdown-end="Jan 27, 2022 18:24:25">
            <div class="countdown-item d-flex flex-column text-center px-2 px-sm-4">
              <span class="fs-30 fs-sm-40 fs-lg-60 lh-1 text-primary day">02</span>
              <span class="fs-12 letter-spacing-05 text-uppercase text-primary font-weight-500">days</span>
            </div>
            <div class="separate fs-30">:</div>
            <div class="countdown-item d-flex flex-column text-center px-2 px-sm-4">
              <span class="fs-30 fs-sm-40 fs-lg-60 lh-1 text-primary hour">24</span>
              <span class="fs-12 letter-spacing-05 text-uppercase text-primary font-weight-500">hours</span>
            </div>
            <div class="separate fs-30">:</div>
            <div class="countdown-item d-flex flex-column text-center px-2 px-sm-4">
              <span class="fs-30 fs-sm-40 fs-lg-60 lh-1 text-primary minute">15</span>
              <span class="fs-12 letter-spacing-05 text-uppercase text-primary font-weight-500">minutes</span>
            </div>
            <div class="separate fs-30">:</div>
            <div class="countdown-item d-flex flex-column text-center px-2 px-sm-4">
              <span class="fs-30 fs-sm-40 fs-lg-60 lh-1 text-primary second">41</span>
              <span class="fs-12 letter-spacing-05 text-uppercase text-primary font-weight-500">seconds</span>
            </div>
          </div>
          <div class="text-center mb-3">
            <a href="#" class="btn btn-outline-primary text-uppercase letter-spacing-05 px-5">get only $1000</a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <section class="pt-8 pb-7 border-bottom">
    <div class="container container-xxl">
      <div class="slick-slider"
        data-slick-options='{"slidesToShow": 7,"infinite":true,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1367,"settings": {"slidesToShow":6}},{"breakpoint": 992,"settings": {"slidesToShow":5}},{"breakpoint": 768,"settings": {"slidesToShow": 4}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
        {{-- for loop --}}
        @for ($i = 1; $i < 10; $i++) <div class="box">
          <a href="#" class="d-block px-3 px-xl-7">
            <img src="{{ 'assets/user/images/client_logo_0'.$i.'.png' }}" alt="Client Logo 01"
              class="opacity-5 opacity-hover-10">
          </a>
      </div>
      @endfor
      {{-- end for loop --}}
    </div>
    </div>
  </section>
  {{-- <section class="py-11 pt-lg-15 pb-lg-10">
    <div class="container">
      <h2 class="mb-9 text-center fs-30 fs-md-40">Featured Items</h2>
      <div class="row overflow-hidden"> --}}
        {{-- for loop --}}
        {{-- @for ($i = 0; $i < 3; $i++)
        <a href="{{ route('show-product', $products[0]['id']) }}">
          <div class="col-md-4 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div class="card-img-top position-relative">
                <div style="background-image: url({{ '/projects/blind/assets/user/images/'. $products[0]['img_name'] }})"
                  class="card-img ratio bg-img-cover-center ratio-1-1">
                </div>
                <div
                  class="position-absolute pos-fixed-bottom px-4 px-sm-6 pb-5 d-flex w-100 justify-content-center content-change-horizontal"> --}}
                  {{-- <a href="#" data-toggle="tooltip" title="Add to cart"
                    class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                    <i class="far fa-shopping-basket"></i>
                  </a>
                  <a href="#" data-toggle="tooltip" title="Add to favourite"
                    class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                    <i class="far fa-heart"></i>
                  </a>
                  <a href="#" data-toggle="tooltip" title="Add to compare"
                    class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mr-2 border">
                    <i class="far fa-random"></i>
                  </a> --}}
                  {{-- <a href="#" data-toggle="tooltip" title="Preview"
                    class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle border">
                    <i class="far fa-eye"></i>
                  </a>
                </div>
              </div>
              <div class="card-body px-0 pt-4 pb-0 d-flex align-items-end">
                <div class="mr-auto">
                  <a href="#"
                    class="text-uppercase text-muted letter-spacing-05 fs-12 d-block font-weight-500">Table</a>
                  <a href="#" class="font-weight-bold mt-1 d-block">Bow Chair</a>
                </div>
              </div>
            </div>
          </div>
          </a>
        @endfor --}}
          {{-- end for loop --}}
      {{-- </div>
    </div>
  </section> --}}
  {{-- <section style="background-color: #f7f7f7;">
    <div class="row align-items-center no-gutters room-inspiration">
      <div class="col-lg-6 order-1 order-lg-first">
        <img src="{{ 'assets/user/images/b-05.jpg' }}">
      </div>
      <div class="col-lg-6 mb-6 mb-lg-0 order-first order-lg-1 ml-auto py-8 py-lg-0 content" data-animate="fadeInRight">
        <h2 class="fs-30 fs-md-56 mb-3">Blind
          Inspiration</h2>
        <p class="mb-7 font-weight-500">We believe in crafting pieces where sustainability and style go hand in hand.
          Made
          from
          materials like recycled cashmere and sustainable.</p>
        <a href="shop-page-04.html" class="btn btn-outline-primary text-uppercase letter-spacing-05">our journal</a>
      </div>
    </div>
  </section> --}}
  {{-- <section class="py-11 py-lg-15 border-bottom">
    <div class="container">
      <h2 class="fs-30 fs-md-40 mb-11 text-center">Happy Clients</h2>
      <div class="slick-slider custom-arrow-1"
        data-slick-options='{"slidesToShow": 3,"infinite":false,"autoplay":false,"dots":true,"arrows":true,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":2,"arrows":false,"dots":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true}}]}'>
        <div class="box">
          <div class="media">
            <div class="mxw-84px mr-4">
              <img src="images/tes_04.jpg" alt="Sampson Totton">
            </div>
            <div class="media-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
              </ul>
              <p class="card-text mb-3 font-weight-500">
                “ Such amazing quality! We also bought the mattress sheet and have nothing bad to say!! “
              </p>
              <p class="card-text text-primary font-weight-bold mb-1 fs-15">Sampson Totton</p>
              <p class="card-text text-muted fs-12 text-uppercase letter-spacing-05 font-weight-500">Golden Clock</p>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="media">
            <div class="mxw-84px mr-4">
              <img src="images/tes_05.jpg" alt="Alfie Wood">
            </div>
            <div class="media-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
              </ul>
              <p class="card-text mb-3 font-weight-500">
                “ Super class, cute, comfortable. You can wear them with just about anything.”
              </p>
              <p class="card-text text-primary font-weight-bold mb-1 fs-15">Alfie Wood</p>
              <p class="card-text text-muted fs-12 text-uppercase letter-spacing-05 font-weight-500">Piper Bar</p>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="media">
            <div class="mxw-84px mr-4">
              <img src="images/tes_06.jpg" alt="Herse Hedman">
            </div>
            <div class="media-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
              </ul>
              <p class="card-text mb-3 font-weight-500">
                “ The separate laptop makes traveling easy. Cannot express how much I love this bag!”
              </p>
              <p class="card-text text-primary font-weight-bold mb-1 fs-15">Herse Hedman</p>
              <p class="card-text text-muted fs-12 text-uppercase letter-spacing-05 font-weight-500">Potato Chair</p>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="media">
            <div class="mxw-84px mr-4">
              <img src="images/tes_04.jpg" alt="Herse Hedman">
            </div>
            <div class="media-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
              </ul>
              <p class="card-text mb-3 font-weight-500">
                “ Such amazing quality! We also bought the mattress sheet and have nothing bad to say!! “
              </p>
              <p class="card-text text-primary font-weight-bold mb-1 fs-15">Herse Hedman</p>
              <p class="card-text text-muted fs-12 text-uppercase letter-spacing-05 font-weight-500">Potato Chair</p>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="media">
            <div class="mxw-84px mr-4">
              <img src="images/tes_05.jpg" alt="Herse Hedman">
            </div>
            <div class="media-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
              </ul>
              <p class="card-text mb-3 font-weight-500">
                “ Super class, cute, comfortable. You can wear them with just about anything.”
              </p>
              <p class="card-text text-primary font-weight-bold mb-1 fs-15">Herse Hedman</p>
              <p class="card-text text-muted fs-12 text-uppercase letter-spacing-05 font-weight-500">Potato Chair</p>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="media">
            <div class="mxw-84px mr-4">
              <img src="images/tes_06.jpg" alt="Herse Hedman">
            </div>
            <div class="media-body">
              <ul class="list-inline mb-2">
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
                <li class="list-inline-item fs-14 text-primary mr-0"><i class="fas fa-star"></i></li>
              </ul>
              <p class="card-text mb-3 font-weight-500">
                “ The separate laptop makes traveling easy. Cannot express how much I love this bag!”
              </p>
              <p class="card-text text-primary font-weight-bold mb-1 fs-15">Herse Hedman</p>
              <p class="card-text text-muted fs-12 text-uppercase letter-spacing-05 font-weight-500">Potato Chair</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <section class="py-10">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-6 mb-md-0">
          <div class="media border-md-right justify-content-center align-items-center">
            <div class="w-52px mr-5">
              <img src="{{ 'assets/user/images/icon-box-03.png' }}" alt="100 Days Return">
            </div>
            <div class="media-body flex-unset">
              <h3 class="fs-20 mb-1">100 Days Return</h3>
              <p class="mb-0 font-weight-500 fs-15">No question asked</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-6 mb-md-0">
          <div class="media border-md-right justify-content-center align-items-center">
            <div class="w-52px mr-5">
              <img src="{{ 'assets/user/images/icon-box-02.png' }}" alt="Lifetime Warranty">
            </div>
            <div class="media-body flex-unset">
              <h3 class="fs-20 mb-1">Lifetime Warranty</h3>
              <p class="mb-0 font-weight-500 fs-15">For original owners</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-6 mb-md-0">
          <div class="media justify-content-center align-items-center">
            <div class="w-52px mr-5">
              <img src="{{ 'assets/user/images/icon-box-01.png' }}" alt="Custom Services">
            </div>
            <div class="media-body flex-unset">
              <h3 class="fs-20 mb-1">Custom Services</h3>
              <p class="mb-0 font-weight-500 fs-15">Our priority</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <section class="pb-2 overflow-hidden">
    <div class="slick-slider mx-n1"
      data-slick-options='{"slidesToShow": 6,"infinite":true,"autoplay":true,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1366,"settings": {"slidesToShow":5}},{"breakpoint": 992,"settings": {"slidesToShow":4}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
      <div class="box px-1">
        <a href="#" class="hover-shine d-block">
          <img src="{{ 'assets/user/images/in_08.jpg' }}" alt="Instagram">
        </a>
      </div>
      <div class="box px-1">
        <a href="#" class="hover-shine d-block">
          <img src="{{ 'assets/user/images/in_04.jpg' }}" alt="Instagram">
        </a>
      </div>
      <div class="box px-1">
        <a href="#" class="hover-shine d-block">
          <img src="images/in_07.jpg" alt="Instagram">
        </a>
      </div>
      <div class="box px-1">
        <a href="#" class="hover-shine d-block">
          <img src="images/in_02.jpg" alt="Instagram">
        </a>
      </div>
      <div class="box px-1">
        <a href="#" class="hover-shine d-block">
          <img src="images/in_06.jpg" alt="Instagram">
        </a>
      </div>
      <div class="box px-1">
        <a href="#" class="hover-shine d-block">
          <img src="images/in_05.jpg" alt="Instagram">
        </a>
      </div>
      <div class="box px-1">
        <a href="#" class="hover-shine d-block">
          <img src="images/in_07.jpg" alt="Instagram">
        </a>
      </div>
    </div>
  </section> --}}
</main>

{{-- jquery cdn --}}
<script src="https://code.jquery.com/jquery-3.6.1.slim.js"
  integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
{{-- sweetalert2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    if ("{{ session()->has('order_placed') }}") {
    Swal.fire({
      icon: 'success',
      title: 'Order Placed',
      text: 'Your Order is Placed Successfully',
      confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
      confirmButtonColor: '#141414'
    })
  }
  </script>
<script>
  let addToCartBtn = document.querySelectorAll('.add-to-cart')
  Array.from(addToCartBtn).forEach(element => {
    element.addEventListener('click', ()=> {
      let productId = element.querySelector('input').value
      $.ajax({
        url: "{{ route('add-to-cart') }}",
        type: "POST",
        dataType: 'json',
        data: { productId },
        headers: {
          "X-CSRF-Token": "{{ csrf_token() }}"
        },
        success: function(reponse) {

        },
        error: function(error) {
          
        }
      })
    })
  })
</script>

@endsection