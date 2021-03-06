@php
    $setting = \App\Http\Controllers\HomeController::getsetting();
    $shoppingCart = \App\Http\Controllers\ShoppingCartController::countShoppingCart();
@endphp
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            @if($setting->facebook !=null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                            @if($setting->instagram !=null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif
                            @if($setting->youtube !=null) <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a> @endif
                            @if($setting->twitter !=null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{asset('assets')}}/home/img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                            @auth
                            <div class="header__top__right__language">
                            <div><a href="">{{ Auth::user()->name }}</a></div>
                                <span class="arrow_carrot-down"></span>
                                            <ul>
                                                <li><a href="{{route('myprofile')}}">Profile</a></li>
                                                <li><a href="/login">Message</a></li>
                                                <li><a href="/login">Comment</a></li>
                                                <li><a href="/login">Favorite</a></li>
                                                <li><a href="{{route('logout')}}">Logout</a></li>
                                            </ul>


                                </div>
                            @endauth

                            @guest
                                <div class="user-panel">
                                    <a href="/login">Login</a> / <a href="/register">Register</a>
                                </div>
                            @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo" href="{{route('home')}}">
                    <h2 > BOOK SHOP</h2>
                    <a href="/"><img src="{{asset('assets')}}/home/img/booklogo.jpg" alt="" height="70" width="100" ></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="{{route('fag')}}">FAQ</a></li>
                                <li><a href="{{route('referances')}}">Referances</a></li>
                                <li><a href="{{route('aboutus')}}}">About As</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('fag')}}">FAQ</a></li>
                        <li><a href="{{route('referances')}}">Referances</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="{{route('shoppingCartView')}}"><i class="fa fa-shopping-bag"></i> <span>{{$shoppingCart}}</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
