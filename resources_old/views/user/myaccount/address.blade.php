@extends('user.myaccount.layout')

@section('main-content')

<div class="col-6">
    <h3 id="addAddressHeading" class="fs-24">Address Details</h3>
    @if (isset($addresses['billingAddress']))
    <h3 id="editBillingHeading" class="fs-24">Edit Billing Address</h3>
    <div class="billing-address"><input type="hidden" value="{{ json_encode($addresses['billingAddress']) }}"></div>
    @else
    <h3 id="addBillingHeading" class="fs-24">Add Billing Address</h3>
    @endif
    @if (isset($addresses['shippingAddress']))
    <h3 id="editShippingHeading" class="fs-24">Edit Shipping Address</h3>    
    <div class="shipping-address"><input type="hidden" value="{{ json_encode($addresses['shippingAddress']) }}"></div>
    @else
    <h3 id="addShippingHeading" class="fs-24">Add Shipping Address</h3>
    @endif
    <p class="fs-16 mb-4">The following addresses will be used on the checkout page by default</p>
    <div>
        <form class="hide-address-form">
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
            <button id="saveAddressBtn" type="submit" class="btn btn-primary btn-block mb-3">Save Address</button>
        </form>
        @if (isset($addresses['billingAddress']))
        <button id="editBillingBtn" type="submit" class="btn btn-primary btn-block mb-3">Edit Billing Address</button>
        @else
        <button id="addBillingBtn" type="submit" class="btn btn-primary btn-block mb-3">Add Billing Address</button>
        @endif
        @if (isset($addresses['shippingAddress']))
        <button id="editShippingBtn" type="submit" class="btn btn-primary btn-block mb-3">Edit Shipping Address</button>
        @else
        <button id="addShippingBtn" type="submit" class="btn btn-primary btn-block mb-3">Add Shipping Address</button>
        @endif
    </div>
</div>

@endsection

@section('account-script')
{{-- custom js --}}
<script>
    $('.hide-address-form').hide()
        $('#addBillingHeading').hide()
        $('#addShippingHeading').hide()
        $('#editBillingHeading').hide()
        $('#editShippingHeading').hide()
        let flag = ''
        let addBillingBtn = document.querySelector('#addBillingBtn')
        if (addBillingBtn != null) {
            addBillingBtn.addEventListener('click', ()=> {
                $('.hide-address-form').show()
                $('#addBillingHeading').show()
                $('#addBillingBtn').hide()
                $('#addAddressHeading').hide()
                $('#addShippingBtn').hide()
                $('#editShippingBtn').hide()
                flag = 'billing'
            })
        }

        let addShippingBtn = document.querySelector('#addShippingBtn')
        if (addShippingBtn != null) {
            addShippingBtn.addEventListener('click', ()=> {
                $('.hide-address-form').show()
                $('#addShippingHeading').show()
                $('#addBillingBtn').hide()
                $('#editBillingBtn').hide()
                $('#addAddressHeading').hide()
                $('#addShippingBtn').hide()
                flag = 'shipping'
            })
        }

        let editBillingBtn = document.querySelector('#editBillingBtn')
        if (editBillingBtn != null) {
            editBillingBtn.addEventListener('click', ()=> {
                $('.hide-address-form').show()
                $('#editBillingHeading').show()
                $('#editBillingBtn').hide()
                $('#addAddressHeading').hide()
                $('#addShippingBtn').hide()
                $('#editShippingBtn').hide()
                let billingAddress = document.querySelector('.billing-address > input').value
                billingAddress = JSON.parse(billingAddress)
                if (billingAddress['company_name'] == null) {
                    billingAddress['company_name'] = ''
                }
                let i = 0
                $('.hide-address-form :input[name]').each((index, value)=> {
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
                flag = 'editBilling'
            })
        }

        let editShippingBtn = document.querySelector('#editShippingBtn')
        if (editShippingBtn != null) {
            editShippingBtn.addEventListener('click', ()=> {
                $('.hide-address-form').show()
                $('#editBillingHeading').show()
                $('#editBillingBtn').hide()
                $('#addAddressHeading').hide()
                $('#editShippingBtn').hide()
                let shippingAddress = document.querySelector('.shipping-address > input').value
                shippingAddress = JSON.parse(shippingAddress)
                if (shippingAddress['company_name'] == null) {
                    shippingAddress['company_name'] = ''
                }
                let i = 0
                $('.hide-address-form :input[name]').each((index, value)=> {
                    if (value.getAttribute('name') == 'state') {
                        Array.from(value).forEach(option => {
                            if (option.getAttribute('value') == (Object.values(shippingAddress))[i]) {
                                option.setAttribute('selected', true)
                            }
                        })
                    } else {
                        value.setAttribute('value', (Object.values(shippingAddress))[i])
                    }
                    i++
                })
                flag = 'editShipping'
            })
        }

        $('#saveAddressBtn').on('click', (e)=> {
            e.preventDefault()
            let inputs = document.querySelector('.hide-address-form').querySelectorAll('[name]')
            let addressData = {}
            Array.from(inputs).forEach(element => {
                let name = element.getAttribute('name')
                let value = element.value
                addressData[name] = value
            })

            let name = addressData['name']
            let companyName = addressData['companyName']
            let country = addressData['country']
            let streetAddress = addressData['streetAddress']
            let city = addressData['city']
            let state = addressData['state']
            let postcode = addressData['postcode']

            let route = null
            if (flag == 'billing') {
                // Set Billing Url
                route = "{{ route('save-billing-address') }}"                
            } 
            else if (flag == 'shipping') {
                // Set Shipping Url
                route = "{{ route('save-shipping-address') }}"
            }
            else if (flag == 'editBilling') {
                // Set Billing Url
                route = "{{ route('edit-billing-address') }}"
            }
            else {
                // Set Shipping Url
                route = "{{ route('edit-shipping-address') }}"
            }
            $.ajax({
                url: route,
                type: "POST",
                dataType: 'json',
                data: { name, companyName, country, streetAddress, city, state, postcode },
                headers: {
                    "X-CSRF-Token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.status == 0) {
                        let para = document.querySelector('.error-text > p')
                        para.innerHTML = ''
                        for (const responseError of response.error) {
                            para.innerHTML += "* " + responseError + "<br>" 
                        }
                    } else {
                        let para = document.querySelector('.error-text > p')
                        para.innerHTML = ''
                        Swal.fire({
                            icon: 'success',
                            title: response.title,
                            text: response.text,
                            confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                            confirmButtonColor: '#141414'
                        })
                    }
                },
                error: function(error) {
                    // alert(JSON.stringify(error))
                    console.log(error)
                }
            })
        })
</script>
@endsection