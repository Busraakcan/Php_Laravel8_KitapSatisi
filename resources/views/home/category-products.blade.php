@extends('layouts.home')
@section('content')
    <section class="featured spad" style="padding-top: 0!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>{{$category->title}}</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter" id="MixItUpB386A6">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/'.$product->image)}}">
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{route('productDetail', $product->id)}}">{{$product->title}}</a></h6>
                            <h5>${{$product->price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
