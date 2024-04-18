@extends('user.myaccount.layout')

@section('main-content')

<div id="pa" class="col-6">
    <h3 class="fs-24">Payment Method</h3>
    <p class="fs-16">This is a TEMPLATE. NOT FUNCTIONING<br>No Payment Method Found</p>
        <form id="paymentMethod">
            @csrf
            <h5 class="mb-4">Add a Card with Stripe</h5>
            <div class="text-danger error-text">
                <p></p>
            </div>
            <div class="form-group mb-3">
                <label for="exampleCardNumber1"><sup class="text-danger">*</sup> Card Number</label>
                <input type="password" class="form-control" id="exampleCardNumber1" placeholder="1234 1234 1234 1234"
                    name="current_password">
            </div>
            <div class="form-group d-flex justify-content-between mb-3">
            <div class="col-6 mb-3" style="padding-left: 0px;">
                <label for="exampleExpiry1"><sup class="text-danger">*</sup> Expiry</label>
                <input type="month" class="form-control" id="exampleExpiry1" placeholder="Password"
                    name="password">
            </div>
            <div class="col-6 mb-3" style="padding-right: 0px;">
                <label for="exampleAccountConfirmPassword"><sup class="text-danger">*</sup> CVV</label>
                <input type="password" class="form-control" id="exampleAccountConfirmPassword"
                    placeholder="CVV" name="password_confirmation">
            </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-3">Add My Card</button>
        </form>
</div>

@endsection