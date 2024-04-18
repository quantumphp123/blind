@extends('user.layout.layout')

@section('title','About-Us')

@section('content')

<main id="content">
    <section class="d-flex flex-column bg-img-cover-center vh-100 custom-height-sm pt-xxl-13"
       style="background-image: url({{'/blind/assets/user/images/bg-home-04.jpg'}})">
      <div class="d-flex flex-column h-100 align-items-center justify-content-center justify-content-xxl-start pt-xxl-13">
        <div class="container">
          <p class="text-center text-white fs-20 font-weight-bold mb-4">Furnitor Story</p>
          <h1 class="fs-60 fs-lg-90 lh-1 text-center text-white">About Us</h1>
        </div>
      </div>
    </section>
    <section class="pt-11 pt-lg-14">
      <div class="container">
        <div class="row align-items-center no-gutters flex-md-row-reverse">
          <div class="col-md-6 pl-md-6 pl-lg-13 mb-6 mb-md-0">
            <h2 class="fs-30 fs-md-60 mb-2">
              Setting <br>
               Industry
            </h2>
            <p class="mb-6"> Portland meggings chartreuse plaid palo santo, gluten-free ramps iPhone etsy salvia
              cray kombucha
              copper mug single-origin coffee.</p>
            <p class="counterup fs-60 text-primary font-weight-500 lh-13 mb-2" data-start="0"
                 data-end="12346" data-decimals="0"
                 data-duration="0" data-separator=",">12346
            </p>
            <p class="text-primary font-weight-500">Satisfied customers worldwide and growing</p>
          </div>
          <div class="col-md-6">
            <img src="{{ url('assets/user/images/b-14.jpg') }}" alt="Setting Industry Standards">
          </div>
        </div>
      </div>
    </section>
    <section class="pt-13">
      <div class="container">
        <div class="mb-8 mxw-110px mx-auto">
          <img src="{{ url('assets/user/images/logo_circle.png') }}" alt="Logo circle">
        </div>
        <div class="mxw-830 mx-auto">
          <h2 class="fs-30 fs-md-40 lh-15 mb-7">Having a place set aside for an activity you
            love makes it more likely you’ll do it.</h2>
          <p class="fs-20 text-primary font-weight-500 mb-6">Awkwardness gives me great comfort. I’ve never been
            cool, but I’ve felt
            cool. I’ve been in the cool place, but I wasn’t really cool – I was trying to pass for hip or
            cool.</p>
          <p class="mb-0">A girl should be two things: classy and fabulous. I am convinced that there can be
            luxury in
            simplicity. I wanted to dress the woman who lives and works, not the woman in a painting. It’s hard
            to balance everything. It’s always challenging. My relationships with producers or photographers –
            these are relationships that took years. I can’t get sucked into that celebrity thing, because I
            think it’s just crass. My aim is to make.</p>
        </div>
      </div>
    </section>
    <section class="pb-13 pt-lg-15 pb-lg-17">
      <div class="container">
        <div class="row align-items-center mb-4 no-gutters">
          <div class="col-md-6 pr-md-6 pr-lg-13">
            <h2 class="fs-30 fs-md-60 mb-3">
              Growing Fast
            </h2>
            <p class="mb-6"> Portland meggings chartreuse plaid palo santo, gluten-free ramps iPhone etsy salvia
              cray kombucha copper mug single-origin coffee.</p>
            <p class="counterup fs-60 text-primary font-weight-500 lh-13 mb-2" data-start="0"
                 data-end="100" data-decimals="0"
                 data-duration="0" data-separator=",">100
            </p>
            <p class="text-primary font-weight-500">Regional offices around the world</p>
          </div>
          <div class="col-md-6 mt-6 mt-md-0">
            <img src="{{ url('assets/user/images/b-15.jpg') }}" alt="Growing Fast">
          </div>
        </div>
      </div>
    </section>
    <section class="py-10 bg-accent">
      <div class="container">
        <h2 class="fs-30 fs-md-40 mb-10 text-center">Core Values</h2>
        <div class="row">
          <div class="col-md-4 mb-6 mb-md-0">
            <div class="card bg-transparent border-0 align-items-center">
              <div class="w-63px card-img">
                <img src="{{ url('assets/user/images/fish_bowl_lg.png') }}" alt="Cruises & Water Tours">
              </div>
              <div class="card-body px-0 pt-6 text-center">
                <h3 class="card-title fs-20 mb-3">Cruises & Water Tours</h3>
                <p class="cart-text mb-0">These are beautiful, well made & ortable! I bought them to wear to
                  work &
                  casually. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-6 mb-md-0">
            <div class="card bg-transparent border-0 align-items-center">
              <div class="w-63px card-img">
                <img src="{{ url('assets/user/images/plant_lg.png') }}" alt="Night Life">
              </div>
              <div class="card-body px-0 pt-6 text-center">
                <h3 class="card-title fs-20 mb-3">Night Life</h3>
                <p class="cart-text mb-0">These are beautiful, well made & ortable! I bought them to wear to
                  work &
                  casually. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-6 mb-md-0">
            <div class="card bg-transparent border-0 align-items-center">
              <div class="w-63px card-img">
                <img src="{{ url('assets/user/images/sofa_lg.png') }}" alt="Hiking">
              </div>
              <div class="card-body px-0 pt-6 text-center">
                <h3 class="card-title fs-20 mb-3">Hiking</h3>
                <p class="cart-text mb-0">These are beautiful, well made & ortable! I bought them to wear to
                  work &
                  casually. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-11 py-lg-15">
      <div class="container">
        <h2 class="text-center fs-30 fs-md-40 mb-8">Our Designers</h2>
        <div class="slick-slider custom-arrow-1"
           data-slick-options='{"slidesToShow": 5,"infinite":true,"autoplay":true,"dots":false,"arrows":true,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow":4,"dots":true,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 3,"dots":true,"arrows":false}},{"breakpoint": 576,"settings": {"slidesToShow": 2,"dots":true,"arrows":false}}]}'>
          {{-- for loop --}}
          @for ($i = 0; $i < 6; $i++)
          <div class="box">
            <a href="#" class="card border-0 align-items-center">
              <div class="w-130 rounded-circle overflow-hidden card-img">
                <img src="{{ url('assets/user/images/our-team-01.jpg') }}" alt="Mattie Blooman">
              </div>
              <div class="card-body px-0 pt-3 pb-0">
                <p class="card-title text-primary fs-15 font-weight-bold mb-0">Mattie Blooman</p>
              </div>
            </a>
          </div>
          @endfor
          {{-- end for loop --}}
        </div>
      </div>
    </section>
  </main>

@endsection