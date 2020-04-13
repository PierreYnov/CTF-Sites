@extends('layouts.front')


@section('content')


<div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading">Panier</h1>
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>supprimer</th>
                                        <th>images</th>
                                        <th>Produit</th>
                                        <th>Prix</th>
                                        <th>Quantite</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="product-remove"><a href="{{ route('cart.destroy', $item->id) }}"><i class="pe-7s-close"></i></a></td>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="assets/img/cart/kisspng-hackaday-security-hacker-computer-software-informa-hacker-5adf9b32b917a8.8663270615246036987582(2).png" alt=""></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{ $item->name }} </a></td>
                                        <td class="product-price-cart"><span class="amount">{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}€</span></td>
                                        <td class="product-quantity">
                                            <form action="{{route('cart.update', $item->id)}}" method="get">
                                                <input name="quantity" type="number" value="{{ $item->quantity }}">

                                                <input class="button" type="submit" value="save">

                                            </form>
                                        </td>
                                        <td class="product-subtotal">{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}€</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                            placeholder="Code coupon" type="text">
                                        <input class="button" name="apply_coupon" value="Appliquer le coupon" type="submit">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Totaux du panier</h2>
                                    <ul>
                                        <li>Sous-total<span>100.00</span></li>
                                        <li>Total<span>{{\Cart::session(auth()->id())->getTotal()}}</span></li>
                                    </ul>
                                    <a href="{{route('cart.checkout')}}">Passer a la caisse</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


@endsection
