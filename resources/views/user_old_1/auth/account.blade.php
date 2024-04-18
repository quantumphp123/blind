@extends('user.layout.layout')

@section('title','My-Account')

@section('content')

<main id="content">
    <section class="pb-9 pb-lg-15 pt-10" style="margin-top: 6%">
      <div class="container">
        <h2 class="fs-sm-40 mb-10 text-center">My Account </h2>
        <div class="row no-gutters">
          {{-- For Guest User --}}
          <div class="col-lg-10 mx-auto">
            <div class="row no-gutters">
              <div class="col-lg-6 mb-8 mb-lg-0 pr-xl-2">
                {{-- Login Form --}}
                <h3 class="fs-24 mb-6">Log In</h3>
                <form action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="form-group mb-4">
                    <div class="text-danger error-text">
                      @if (session()->has('error'))
                          <p>{{ session('error') }}</p>
                      @endif
                    </div>
                    <label for="exampleLoginInputEmail1" class="sr-only">Email address</label>
                    <input type="email" class="form-control" id="exampleLoginInputEmail1" name="email"
                                     placeholder="Email Address">
                  </div>
                  <div class="form-group mb-3">
                    <label for="exampleLoginInputPassword1" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="exampleLoginInputPassword1"
                                     placeholder="Password" name="password">
                  </div>
                  <a href="password-recovery.html" class="d-inline-block fs-15 border-2x lh-12 mb-5 border-secondary border-hover-primary">Forgot your password?</a>
                  <button type="submit" class="btn btn-primary btn-block mb-3">Submit</button>
                  {{-- <div class="row no-gutters mx-n2">
                    <div class="col-sm-12 mb-4 mb-sm-0 px-2">
                      <a href="{{ route('redirect-to-google') }}" class="btn btn-outline-primary btn-block text-capitalize px-2 font-weight-500">
                        <span class="d-inline-block mr-2">
                          <i class="fab fa-google"></i>
                        </span>Continue with Google</a>
                    </div>
                  </div> --}}
                </form>
                {{-- Login Form End --}}
              </div>
              <div class="col-lg-6 pl-lg-6 pl-xl-12">
                <div id="register">
                  <h3 class="fs-24 mb-3">New Customer</h3>
                  <p class="mb-6">By creating an account with our store, you will be able to move through the
                    checkout process
                    faster, store multiple shipping addresses, view and track your orders in your account and
                    more.</p>
                  <button class="btn btn-primary">Register</button>
                </div>
                <div id="signupForm" style="display: none">
                  {{-- Signup Form --}}
                  <h3 class="fs-24 mb-6">Create Account</h3>
                  <form id="signupForm">
                    <div class="form-group mb-4">
                      <div class="text-danger error-text"><p></p></div>
                      <label for="exampleName" class="sr-only">Full Name</label>
                      <input type="text" class="form-control" id="exampleName" name="name"
                                       placeholder="Full Name">
                    </div>
                    <div class="form-group mb-4">
                      <label for="exampleInputEmail1" class="sr-only">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                       placeholder="Email Address">
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputPassword1" class="sr-only">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password" name="password">
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleConfirmPassword" class="sr-only">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleConfirmPassword"
                                       placeholder="Password" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
                    </div>
                  </form>
                  {{-- Signup Form End --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  {{-- Jquery CDN --}}
  <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
  {{-- sweetalert2 --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $('#register').on('click', ()=> {
      $('#register').hide()
      $('#signupForm').show()
    })

    $('#pa').hide()
    $('a[href="#ppd"]').on('click', (e)=> {
      e.preventDefault()
      $('#ppd').show()
      $('#pa').hide()
    })
    $('a[href="#pa"]').on('click', (e)=> {
      e.preventDefault()
      $('#ppd').hide()
      $('#pa').show()
    })
  </script>
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
    <script>
    // Signup with Ajax
    let signupForm = document.querySelector('#signupForm')
    signupForm.querySelector('button').addEventListener('click', (e)=> {
      e.preventDefault()
      let name = signupForm.querySelector('input[name=name]').value
      let email = signupForm.querySelector('input[name=email]').value
      let password = signupForm.querySelector('input[name=password]').value
      let password_confirmation = signupForm.querySelector('input[name=password_confirmation]').value
      $.ajax({
        url: "{{ route('signup') }}",
        type: "POST",
        dataType: 'json',
        data: { name, email, password, password_confirmation},
        headers: {
          "X-CSRF-Token": "{{ csrf_token() }}"
        },
        success: function(response) {
          let para = signupForm.querySelector('div.error-text > p')
          para.innerHTML = ''
          if (response.status == 0) {
            para.className += ' mb-3'
            Array.from(response.error).forEach(element => {
                para.innerHTML += "* " + element + "<br>"
            });
          }
          else {
            Swal.fire({
              icon: 'success',
              title: response.title,
              html: response.text,
              confirmButtonText: '<i class="fa fa-thumbs-up"></i> Ok!',
              confirmButtonColor: '#141414'
            }).then(result => {
              location.reload()
            })
          }
        },
        error: function(error) {
          alert("S: " +JSON.stringify(error))
        }
      })
    })
  </script>

@endsection