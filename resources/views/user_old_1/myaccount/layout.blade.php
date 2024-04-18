@extends('user.layout.layout')

@section('title','My-Account')

@section('styles')
<style>
    .sidebar-active {
        border-bottom: 1px solid black;
        border-top: 1px solid black;
        border-bottom-left-radius: 3px;
        border-top-left-radius: 3px;
        padding: 1px 5px 1px 5px;
    }
</style>
@endsection

@section('content')

<main id="content">
    <section class="pb-9 pb-lg-15 pt-10" style="margin-top: 6%">
        <div class="container">
            <h2 class="fs-sm-40 mb-10 text-center">My Account</h2>
            <div class="row no-gutters">
                <div class="col-3">
                    <div class="d-flex">
                        <ul style="list-style: none;">
                            <li class="mb-1">
                                <a href="{{ route('account-personal-details') }}">
                                    <div @if (url()->current() == route('account-personal-details')) class="sidebar-active" @endif>
                                        Personal Details
                                    </div>
                                </a>
                            </li>
                            <li class="mb-1">
                                <a href="{{ route('account-address') }}">
                                    <div @if (url()->current() == route('account-address')) class="sidebar-active" @endif>
                                        Address
                                    </div>
                                </a>
                            </li>
                            <li class="mb-1">
                                <a href="{{ route('account-payment-method') }}">
                                    <div @if (url()->current() == route('account-payment-method')) class="sidebar-active" @endif>
                                        Payment Method
                                    </div>
                                </a>
                            </li>
                            {{-- <li class="mb-1">
                                <a href="{{ route('account-payment-method') }}">
                                    <div @if (url()->current() == route('account-payment-method')) class="sidebar-active" @endif>
                                        Logout
                                    </div>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>

                @yield('main-content')

            </div>
        </div>
    </section>
</main>

{{-- Jquery CDN --}}
<script src="https://code.jquery.com/jquery-3.6.1.slim.js"
    integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
{{-- sweetalert2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('account-script')

@endsection