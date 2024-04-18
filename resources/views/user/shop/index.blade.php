@extends('user.layout.layout')

@section('title','Shopping Page')

@section('content')

<main id="content">
    <section class="py-8 page-title border-top mt-1">
      <div class="container">
        <h1 class="fs-40 mb-1 text-capitalize text-center">Shop All</h1>
      </div>
    </section>
    <section>
      <div class="container container-xxl">
        <div class="d-flex mb-7">
          <div class="d-flex align-items-center text-primary font-weight-500" data-canvas="true"
               data-canvas-options='{"container":".filter-canvas"}'>
            <button type="button" class="border-0 pl-0 pr-2 fs-12 bg-transparent">
              <i class="far fa-align-left"></i>
            </button>
            Filter
          </div>
          <div class="ml-auto">
            <div class="dropdown">
              <a href="#" class="dropdown-toggle fs-14" id="dropdownMenuButton" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                Default Sorting
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                <a class="dropdown-item text-primary fs-14" href="#">Price high to low</a>
                <a class="dropdown-item text-primary fs-14" href="#">Price low to high</a>
                <a class="dropdown-item text-primary fs-14" href="#">Random</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-7 overflow-hidden">
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-19.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Bow Chair</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-02.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Potato Chair</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">chair</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="badge badge-green badge-circle ml-auto w-45px h-45px fs-12 d-flex align-items-center justify-content-center mb-2">
                    new
                  </div>
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-10.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Golden Clock</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">decor</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-04.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Piper Bar</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-16.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Golden Clock</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">decor</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-04.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Piper Bar</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-06.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Golden Clock</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">decor</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    <span
                                      class="text-line-through text-secondary fs-14 d-inline-block mr-2 font-weight-normal">$1390.00</span>
                    $1000.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="badge badge-pink badge-circle ml-auto w-45px h-45px fs-12 d-flex align-items-center justify-content-center mb-2">
                    sale
                  </div>
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-05.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Piper Bar</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="badge badge-yellow badge-circle ml-auto w-45px h-45px fs-12 d-flex align-items-center justify-content-center mb-2">
                    hot
                  </div>
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-08.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Bow Chair</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-15.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Potato Chair</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">chair</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="badge badge-green badge-circle ml-auto w-45px h-45px fs-12 d-flex align-items-center justify-content-center mb-2">
                    new
                  </div>
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-18.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Golden Clock</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">decor</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-13.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Piper Bar</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-09.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Golden Clock</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">decor</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-05_1.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Piper Bar</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-26.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Golden Clock</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">decor</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    <span
                                      class="text-line-through text-secondary fs-14 d-inline-block mr-2 font-weight-normal">$1390.00</span>
                    $1000.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="badge badge-pink badge-circle ml-auto w-45px h-45px fs-12 d-flex align-items-center justify-content-center mb-2">
                    sale
                  </div>
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-6" data-animate="fadeInUp">
            <div class="card border-0 hover-change-content product">
              <div style="background-image: url('http://localhost/projects/laravelproject/assets/user/images/product-07.jpg')"
                       class="card-img ratio bg-img-cover-center ratio-1-1">
              </div>
              <div class="card-img-overlay d-flex py-4 py-sm-5 pl-6 pr-4">
                <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold mb-1 d-block lh-12">Piper Bar</a>
                  <a href="#" class="text-uppercase text-muted letter-spacing-05 fs-12 font-weight-500">Table</a>
                  <p class="mt-auto text-primary mb-0 font-weight-500">
                    $1390.00</p>
                </div>
                <div class="ml-auto d-flex flex-column">
                  <div class="badge badge-yellow badge-circle ml-auto w-45px h-45px fs-12 d-flex align-items-center justify-content-center mb-2">
                    hot
                  </div>
                  <div class="my-auto content-change-vertical">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to card"
                                 class="add-to-cart d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-shopping-basket"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to favourite"
                                 class="add-to-wishlist d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-heart"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Add to compare"
                                 class="add-to-compare d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-random"></i>
                    </a>
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Preview"
                                 class="preview d-flex align-items-center justify-content-center text-primary bg-white hover-white bg-hover-primary w-45px h-45px rounded-circle mb-2 border">
                      <i class="far fa-eye"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="pb-11 pb-lg-14 overflow-hidden">
          <ul class="pagination justify-content-center align-items-center mb-0">
            <li class="page-item fs-12 d-none d-sm-block">
              <a class="page-link" href="#" tabindex="-1"><i class="far fa-angle-double-left"></i></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item fs-12 d-none d-sm-block">
              <a class="page-link" href="#"><i class="far fa-angle-double-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
  </main>
    
@endsection
    