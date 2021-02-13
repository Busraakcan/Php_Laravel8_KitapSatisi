@extends('layouts.home')
@section('content')
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="{{asset('storage/'.$product->image)}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel owl-loaded owl-drag">




                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1006px, 0px, 0px); transition: all 1.2s ease 0s; width: 1725px;"><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div><div class="owl-item" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div><div class="owl-item cloned active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-2.jpg" src="img/product/details/thumb-1.jpg" alt=""></div><div class="owl-item cloned active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-3.jpg" src="img/product/details/thumb-2.jpg" alt=""></div><div class="owl-item cloned active" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-5.jpg" src="img/product/details/thumb-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 123.75px; margin-right: 20px;"><img data-imgbigurl="img/product/details/product-details-4.jpg" src="img/product/details/thumb-4.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$product->title}}</h3>
                        <div class="product__details__price">${{$product->price}}</div>
                        <p>{{$product->description}}</p>

                        <form action="{{route('addToShoppingCart', $product->id)}}" method="POST">
                            @csrf
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input name="count" type="text" value="1">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn primary-btn">ADD TO CARD</button>
                        </form>

                        <ul>
                            <li><b>Yazar</b> <span>{{$product->yazar}}</span></li>
                            <li><b>Kategori</b> <span>{{$product->category->title}}</span></li>
                            <li><b>Yayın Evi</b> <span>{{$product->yayın_evi}}</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Detay</h6>
                                    <p>
                                        {{$product->detail}}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                @foreach($product->comments()->where('validated', true)->get() as $comment)
                                <div class="product__details__tab__desc" style="padding-top: 10px!important;">
                                    <h6 style="margin-bottom: 5px!important;">Yorum: {{$comment->user->name}}</h6>
                                    <p>{{$comment->text}}</p>
                                </div>
                                @endforeach
                                    <div class="product__details__tab__desc">
                                        <h6 style="margin-bottom: 5px!important;">Yorum Yap:</h6>
                                        <form action="{{route('makeComment')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}" />
                                            <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" />
                                            <div class="form-group">
                                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <button class="btn btn-primary mb-2" type="submit">Yorum Yap</button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
