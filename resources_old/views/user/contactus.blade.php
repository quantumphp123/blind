@extends('user.layout.layout')

@section('title','Contact-Us')

@section('content')

<main id="content">
    <section class="pt-10 pb-8" style="margin-top: 6%;">
      <div class="container">
        <h2 class="fs-sm-40 mb-10 text-center">Contact Us</h2>
    </section>
    <div class="pb-14">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 mb-8 mb-md-0">
            <h2 class="fs-24 mb-2">
              We would love to hear from you.
            </h2>
            <p class="mb-7">If you’ve got great products your making or looking to work with us then drop us a line.</p>
            <form>
              <div class="row mb-6">
                <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Your Name*" @if (session()->has('id')) value="{{ session('name') }}" @endif required>
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control" placeholder="Your Email*" @if (session()->has('id')) value="{{ session('email') }}" @endif required>
                </div>
              </div>
              <div class="form-group mb-4">
                <textarea class="form-control" rows="6">Comment</textarea>
              </div>
              {{-- <div class="custom-control custom-checkbox mb-6">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label fs-15" for="customCheck1"> Save my name, email, and website in this
                  browser for the next time I comment.</label>
              </div> --}}
              <button type="submit" class="btn btn-primary text-uppercase letter-spacing-05">send now</button>
            </form>
          </div>
          <div class="col-md-4 pl-xl-13 pl-md-6">
            <p class="font-weight-bold text-primary mb-3">Address</p>
            <address class="mb-6">
              7895 Piermont Dr NE Albuquerque,<br>
               NM 198866, See Our Stores
            </address>
            <p class="font-weight-bold text-primary mb-2">Infomation</p>
            <p class="mb-0">+391 (0)35 2568 4593</p>
            <p class="mb-7">hello@domain.com</p>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection