@php
    $slideProducts = \App\Http\Controllers\HomeController::slideProducts();
@endphp
<section class="categories">
    <div class="container">
        <div class="row">
            <h2 style="font-weight: 700; color: #1c1c1c">En Yeniler</h2>
            <div class="categories__slider owl-carousel">
                @foreach($slideProducts as $product)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{asset('storage/'.$product->image)}}">
                        <h5><a href="#">{{$product->title}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
