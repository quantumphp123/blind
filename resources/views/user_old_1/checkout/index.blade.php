@extends('user.layout.layout')

@section('title','Checkout')
    
@section('content')

<main id="content">
    {{-- <section class="py-3 bg-color-3">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb py-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#"> Pages </a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
          </ol>
        </nav>
      </div>
    </section> --}}
    <section class="pb-11 pb-lg-15 pt-10 mt-10">
      <div class="container">
        <h2 class="fs-sm-40 mb-9 text-center">Check Out</h2>
        @if (!session()->has('id'))
        <p class="mb-6">Returning Customer? <a href="{{ route('account') }}"
          class="d-inline-block fs-15 border-bottom lh-12 border-primary ">Click
          here to Login</a></p>
        @endif
        <div class="card bg-color-3 mxw-510 border-0 rounded-0 box-coupon mb-8">
          <div class="card-body pt-6 px-5 pb-7">
            <form>
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Your Email*">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">apply coupon</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <form action="{{ route('place-order') }}" method="post" class="hide-address-form">
          @csrf
          <div class="row">
            <div class="col-lg-6 mb-9 mb-lg-0">
              <h3 class="fs-24 mb-7">Billing details</h3>
              @if (isset($billingAddress))
                  <div class="billing-address"><input type="hidden" value="{{ json_encode($billingAddress) }}"></div>
              @endif
                <div class="text-danger error-text">
                    <p></p>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleAddressName1">Full Name<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="exampleAddressName1" name="name" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleAddressCompany1">Company Name &#40;optional&#41;</label>
                    <input type="text" class="form-control" id="exampleAddressCompany1" name="companyName">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleCountry1">Country<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="exampleCountry1" value="New Zealand" name="country"
                        readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleStreetAddress1">Street Address</label>
                    <input type="text" class="form-control" id="exampleStreetAddress1"
                        placeholder="House Number, Street Name" name="streetAddress">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleCity">City<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="exampleCity" name="city">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleState">State<span class="text-danger"> *</span></label>
                    <div>
                        <select size="4" class="form-control" name="state" id="exampleState">
                            @foreach ($states as $state)
                            <option @if ($state['id']==1) selected @endif value="{{ $state['id'] }}">{{ $state['name'] }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="examplePostcode">Postcode/Zip<span class="text-danger"> *</span></label>
                    <input type="text" class="form-control" id="examplePostcode" name="postcode">
                </div>
            </div>
            <div class="col-lg-6 pl-lg-13">
              {{-- <h3 class="fs-24 mb-7">Your order</h3>
              <div class="card border-0 rounded-0 bg-color-3">
                <div class="card-body px-6 py-7">
                  <div class="d-flex pb-3">
                    <div class="text-primary font-weight-bold">Product</div>
                    <div class="text-primary font-weight-bold ml-auto">Total</div>
                  </div>
                  <div class="pb-3 mb-3 border-bottom d-flex">
                    <div class="text-primary">Black Chair × 1</div>
                    <div class="text-primary ml-auto"> £45.00</div>
                  </div>
                  <div class="pb-3 mb-3 border-bottom d-flex">
                    <div class="text-primary">Subtotal</div>
                    <div class="text-primary ml-auto">£45.00</div>
                  </div>
                  <div class="pb-8 mb-3 border-bottom d-flex">
                    <div class="text-primary">Total</div>
                    <div class="text-primary font-weight-bolder ml-auto">£45.00</div>
                  </div> --}}
                  <h3 class="fs-24 mb-7">Choose Payment Type</h3>
                  <div class="form-check pl-0 border-bottom pb-3 mb-3">
                    <div class="custom-control custom-radio mb-5">
                      <input class="custom-control-input" type="radio" name="payment-method" id="cash" value="option1">
                      <label class="custom-control-label text-primary ml-2" for="cash">
                        Credit/Debit Card
                      </label>
                    </div>
                    {{-- <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" name="payment-method" id="paypal"
                        value="option1">
                      <label class="custom-control-label text-primary ml-2" for="paypal">
                        POLi Payment
                      </label>
                    </div> --}}
                  </div>
                  <p class="mb-8">Your personal data will be used to process your order, support your experience
                    throughout
                    this website, and for other purposes described in our <a href="#">privacy policy</a> .
                  </p>
                  <button class="btn btn-outline-primary btn-block" type="submit">
                    Place Oder
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>
    
@endsection

@section('scripts')
    <script>
      let billingAddress = document.querySelector('.billing-address > input').value
      billingAddress = JSON.parse(billingAddress)
      if (billingAddress['company_name'] == null) {
          billingAddress['company_name'] = ''
      }
      let i = 0
      $('.hide-address-form :input[name]').each((index, value)=> {
        console.log(value)
          if (value.getAttribute('name') == 'state') {
              Array.from(value).forEach(option => {
                  if (option.getAttribute('value') == (Object.values(billingAddress))[i]) {
                      option.setAttribute('selected', true)
                  }
              })
          } else {
              value.setAttribute('value', (Object.values(billingAddress))[i])
          }
          i++
      })
    </script>
@endsection