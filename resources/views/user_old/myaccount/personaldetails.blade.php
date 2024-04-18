@extends('user.myaccount.layout')

@section('main-content')

<div id="ppd" class="col-6">
    <h3 class="fs-24 mb-6">Personal Details</h3>
    <form id="personalDetails">
        @csrf
        <div class="form-group mb-4">
            <label for="exampleAccountName1">Full Name</label>
            <input type="text" class="form-control" id="exampleAccountName1" name="name" value="{{ session('name') }}">
        </div>
        <div class="form-group mb-4">
            <label for="exampleAccountEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleAccountEmail1" name="email"
                value="{{ session('email') }}">
        </div>
        <h5 class="mb-4">Change Password</h5>
        <div class="text-danger error-text">
            <p></p>
        </div>
        <div class="form-group mb-3">
            <label for="exampleAccountPassword1">Current Password</label>
            <input type="password" class="form-control" id="exampleAccountPassword1" placeholder="Current Password"
                name="current_password">
        </div>
        <div class="form-group mb-3">
            <label for="exampleAccountInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleAccountInputPassword1" placeholder="Password"
                name="password">
        </div>
        <div class="form-group mb-3">
            <label for="exampleAccountConfirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="exampleAccountConfirmPassword"
                placeholder="Confirm Password" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-3">Save Changes</button>
    </form>
</div>

<script>
    // Changing Personal Details with Ajax
    let personalDetails = document.querySelector('#personalDetails')
    personalDetails.querySelector('button').addEventListener('click', (e)=> {
      e.preventDefault()
      let name = personalDetails.querySelector('input[name=name]').value
      let email = personalDetails.querySelector('input[name=email]').value
      let current_password = personalDetails.querySelector('input[name=current_password]').value
      let password = personalDetails.querySelector('input[name=password]').value
      let password_confirmation = personalDetails.querySelector('input[name=password_confirmation]').value
      let para = personalDetails.querySelector('div.error-text > p')
      $.ajax({
        url: "{{ route('change-personals') }}",
        type: "POST",
        dataType: 'json',
        data: { name, email, current_password, password, password_confirmation },
        headers: {
          "X-CSRF-Token": "{{ csrf_token() }}"
        },
        success: function(response) {
          if (response.status == 0) {
            let para = personalDetails.querySelector('div.error-text > p')
            para.innerHTML = ''
            para.innerHTML = response.error
          } else {
            para.innerHTML = ''
            personalDetails.querySelector('input[name=current_password]').value = ''
            personalDetails.querySelector('input[name=password]').value = ''
            personalDetails.querySelector('input[name=password_confirmation]').value = ''
            Swal.fire({
              icon: 'success',
              title: response.title,
              text: response.text,
              confirmButtonText: '<i class="fa fa-thumbs-up"></i> Thanks!',
              confirmButtonColor: '#141414'
            })
          }
        },
        error: function(error) {
          console.log(error)
        }
      })
    })
</script>

@endsection