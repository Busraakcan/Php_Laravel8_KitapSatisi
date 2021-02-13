@extends('layouts.home')
@section('content')
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th class="shoping__product">Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $cart)
                        <tr>
                            <td class="shoping__cart__item">
                                <h5>{{$cart->product->title}}</h5>
                            </td>
                            <td class="shoping__cart__price">
                                {{$cart->product->price}}
                            </td>
                            <td class="shoping__cart__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        @php
                                        $count = $cart->getCount($cart->product_id, \Illuminate\Support\Facades\Auth::user()->id);
                                        @endphp
                                        <input type="text" value="{{$count}}">
                                    </div>
                                </div>
                            </td>
                            <td class="shoping__cart__total">
                                ${{$count * $cart->product->price}}
                            </td>
                            <td class="shoping__cart__item__close">
                                <a href="{{route('removeProductShoppingCart', $cart->product_id)}}"><span class="icon_close"></span></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
