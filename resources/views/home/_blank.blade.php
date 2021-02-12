<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Busra Akcan">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/style.css" type="text/css">
    @yield('css')
    @yield('headerjs')
</head>

<body>
@include('home._header')
@include('home.user_profil_header')
<!-- Checkout Section Begin -->

<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-5">
            <div class="sidebar">
                <div class="sidebar__item">
                    <h4>User Panel</h4>
                    <ul>
                        <li><a href="{{route('myprofile')}}">My Profile</a></li>
                        <li><a href="#">My Orders</a></li>
                        <li><a href="#">My Reviews</a></li>
                        <li><a href="#">My Shopcart</a></li>
                        <li><a href="#">My Messages</a></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="checkout__form">
                <h4>USER PROFILE</h4>
                @include('profile.show')
            </div>
        </div>
    </div>
    </section>
    <!-- Checkout Section End -->
</div>
</div>
@include('home._footer')
@yield('footerjs')
</body>
</html>
