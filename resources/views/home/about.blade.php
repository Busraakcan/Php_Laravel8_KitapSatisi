

@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<link rel="stylesheet" href="{{asset('assets')}}/home/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/home/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/home/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/home/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/home/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/home/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/home/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/home/css/style.css" type="text/css">

@section('title', 'About Us')


<div class="col-sm-12">
    <h1>About Us</h1>
    <a href="{{asset('assets')}}/home/index.html" target="_blank"><img src="{{asset('assets')}}/home/img/bookShop.png" alt=""><h3>BOOK SHOP</h3></a>
    Gordion Akademi, Eğitim Danışmanlık Yayıncılık Ltd Şti 10 yılı aşkın süredir
    İngilizce eğitimine yönelik kaliteli eğitim içeriği sağlamayı ve meslekiçi
    eğitim desteğini de içeren kaliteli ve istikrarlı bir hizmet sunmayı ilke edinmiştir.
    Yabancı dil alanında yüz yüze, uzaktan ve elektronik öğrenmeyi desteklemek amacıyla
    bünyesindeki uzman ekibiyle Yabancı Dil Yüksek Okullarına eğitim çözümleri sağlamaktadır.
    <br>
</div>
