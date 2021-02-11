<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo" href="{{route('home')}}">
                        <a href="{{asset('assets')}}/home/index.html"><img src="{{asset('assets')}}/home/img/bookShop.png" alt="" height="150" width="180"><h3>BOOK SHOP</h3></a>
                    </div>
                    <ul>
                        <li><a href="{{route('aboutus')}} " target="_blank" >About Us</a></li>
                        <li><a href="{{route('home')}}">Home</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <ul>
                        <h3>Adress</h3>
                        <strong>Company :</strong> {{$setting->company}} <br>
                        <strong> Adress :</strong> {{$setting->adress}} <br>
                        <strong>Phone :</strong> {{$setting->phone}} <br>
                        <strong>Fax :</strong> {{$setting->fax}} <br>
                        <strong>Email :</strong> {{$setting->email}} <br>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        @if($setting->facebook !=null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                        @if($setting->instagram !=null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif
                        @if($setting->youtube !=null) <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a> @endif
                        @if($setting->twitter !=null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <div class="copyright"><a href="">{{$setting->company}}</a> 2020 @ All rights reserved</div>
                    <div class="footer__copyright__payment"><img src="{{asset('assets')}}/home/img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<script src="{{asset('assets')}}/home/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets')}}/home/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/home/js/jquery.nice-select.min.js"></script>
<script src="{{asset('assets')}}/home/js/jquery-ui.min.js"></script>
<script src="{{asset('assets')}}/home/js/jquery.slicknav.js"></script>
<script src="{{asset('assets')}}/home/js/mixitup.min.js"></script>
<script src="{{asset('assets')}}/home/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/home/js/main.js"></script>
