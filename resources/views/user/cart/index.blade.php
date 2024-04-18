@extends('user.layout.layout')

@section('title','Cart')
    
@section('content')

<main id="content">

    <section class="pb-11 pb-lg-15 pt-10" style="margin-top: 6%;">
      <div class="container">
        <h2 class="fs-sm-40 mb-9 text-center">Shopping Cart</h2>
        <form>
          <div class="row">
            <div class="col-lg-9 mb-9 mb-lg-0 pr-lg-13">
              <div class="table-responsive">
                @if (count($cart_items) == 0)
                    <p class="font-weight-bold text-dark text-center">Oops, Looks like you haven't brought anything</p>
                @else
                @foreach ($cart_items as $items)
                <table class="table table-borderless">
                  <tbody>
                    <tr class="border-bottom border-top">
                      @if (isset($items['productId']))
                      <td class="pl-0 py-6 align-middle"><a href="{{ route('remove-from-cart', $items['productId']) }}" class="d-block mr-4"><i
                        class="fal fa-times"></i></a></td>
                        @else 
                        <td class="pl-0 py-6 align-middle"><a href="{{ route('remove-from-cart', $items['id']) }}" class="d-block mr-4"><i
                          class="fal fa-times"></i></a></td>
                      @endif
                      <td class="py-6 pl-0">
                        <div class="media">
                          {{-- <div class="w-90px mr-4">
                            <img src="{{url('assets/user/images/cart-01.jpg')}}"
                                                   alt="Partridge Bar Stool">
                          </div> --}}
                          <div class="media-body">
                            @foreach ($items as $key => $value)
                            @if ($value != null && $key != 'fabric_id' && $key != 'color_id' && $key != 'price' && $key != 'productId' && $key != 'id')
                            <a href="#" class="font-weight-bold mb-1 d-block">{{ ucfirst($key) }} : <span class="font-weight-light">{{ ucwords($value) }}</span></a>
                            @endif
                            @if ($key == 'price')
                            <a href="#" class="font-weight-bold mb-1 d-block">{{ ucfirst($key) }} : <span class="font-weight-light text-success">{{ '$ '. ucwords($value) }}</span></a>
                            @endif
                            @endforeach
                          </div>
                        </div>
                      </td>
                      <td class="pl-0 py-6">
                        @if (isset($items['productId']))
                        <div class="input-group position-relative w-100px">
                          <a href="{{ route('dec-product', $items['productId']) }}" class="position-absolute pos-fixed-left-center pl-2 z-index-2"><i
                                                  class="far fa-minus"></i></a>
                          <input name="text" type="number"
                                                 class="form-control form-control-sm w-100 px-6 fs-16 text-center input-quality bg-transparent h-35px"
                                                 value="{{ $items['quantity'] }}"
                                                 required>
                          <a href="{{ route('inc-product', $items['productId']) }}"
                                             class="position-absolute pos-fixed-right-center pr-2 z-index-2"><i
                                                  class="far fa-plus"></i>
                          </a>
                        </div>
                        @else
                        <div class="input-group position-relative w-100px">
                          <a href="{{ route('dec-product', $items['id']) }}" class="position-absolute pos-fixed-left-center pl-2 z-index-2"><i
                                                  class="far fa-minus"></i></a>
                          <input name="text" type="number"
                                                 class="form-control form-control-sm w-100 px-6 fs-16 text-center input-quality bg-transparent h-35px"
                                                 value="{{ $items['quantity'] }}"
                                                 required>
                          <a href="{{ route('inc-product', $items['id']) }}"
                                             class="position-absolute pos-fixed-right-center pr-2 z-index-2"><i
                                                  class="far fa-plus"></i>
                          </a>
                        </div>
                        @endif
                        <div class="input-group position-relative w-100px">
                          {{-- @if (isset($items['quantity'])) --}}
                          {{-- <span class="font-weight-bold">Quantity&#160;:&#160;</span> {{ $items['quantity'] }} --}}
                          {{-- @endif --}}
                        </div>
                      </td>
                      <td class="pl-0 py-6">
                        <p class="mb-0 ml-12 text-primary"><span class="text-success">$ {{ $items['price'] }}</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                @endforeach
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card border-0">
                <div class="card-header border-0 bg-transparent p-0">
                  <h4 class="card-title fs-24 mb-0">Summary</h4>
                </div>
                <div class="card-body pt-6 px-0 pb-4">
                  <div class="d-flex align-items-center mb-1">
                    <span class="text-primary">Subtotal</span>
                    <span class="d-block ml-auto text-primary">$ {{ $subtotal_price }}</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="text-primary">Shipping</span>
                    <span class="d-block ml-auto text-primary">$ 20.00</span>
                  </div>
                </div>
                <div class="card-footer pt-4 px-0 bg-transparent">
                  <div class="d-flex align-items-center font-weight-bold mb-7">
                    <span class="text-primary">Total</span>
                    <span class="d-block ml-auto text-primary">$ {{ $total_price }}</span>
                  </div>
                  {{-- <input type="text" name="coupon" class="form-control w-100 text-primary mb-3"
                                 placeholder="Enter coupon code here"> --}}
                  <a href="{{ route('checkout') }}" style="border-radius: 10px;background-color:black;color:white;padding:10px;">Checkout </a>
                </div>
              </div>
            </div>
          </div>
        </form>
        @endif
      </div>
    </section>
  </main>
    
@endsection