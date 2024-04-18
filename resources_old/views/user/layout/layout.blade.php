<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/user/vendors/fontawesome-pro-5/css/all.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/vendors/bootstrap-select/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/vendors/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/vendors/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/vendors/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/vendors/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets/user/vendors/mapbox-gl/mapbox-gl.min.css')}}">
    <!-- Themes core CSS -->
    <link rel="stylesheet" href="{{url('assets/user/css/themes.css')}}">
    <!-- Favicons -->
    <link rel="icon" href="{{url('assets/user/images/favicon.ico')}}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="Home 01">
    <meta name="twitter:description" content="Furniture Shop Html Template">
    <meta name="twitter:image" content="{{url('assets/user/images/logo_01.png')}}">
    <!-- Facebook -->
    <meta property="og:url" content="{{url('assets/user/home-01.html')}}">
    <meta property="og:title" content="{{url('assets/user/Home 01')}}">
    <meta property="og:description" content="{{url('assets/user/Furniture Shop Html Template')}}">
    <meta property="og:type" content="{{url('assets/user/website')}}">
    <meta property="og:image" content="{{url('assets/user/images/logo_01.png')}}">
    <meta property="og:image:type" content="{{url('assets/user/image/png')}}">
    <meta property="og:image:width" content="1200'">
    <meta property="og:image:height" content="630">


    @yield('styles')
</head>
<body>
    
    @include('user.partials.header')

    @if (url()->current() != route('homepage') && url()->current() != route('about-us'))
        <script>
            document.querySelector('#normalLogo').setAttribute('src', "{{ url('assets/user/images/logo.png') }}")
            document.querySelector('#headerOffer').style.display = 'none'

            let header = document.querySelector('header') 
            header.classList.remove('navbar-dark')

            window.onscroll = ()=> {
                let rootEle = document.documentElement
                if (rootEle.scrollTop == 0){
                    header.classList.remove('navbar-light')
                    header.classList.remove('navbar-light-sticky')
                }
                else {
                    header.className += ' navbar-light navbar-light-sticky'
                }        
            }
        </script>
    @endif
    
    @yield('content')

    @include('user.partials.footer')

    @yield('scripts')
</body>
</html>