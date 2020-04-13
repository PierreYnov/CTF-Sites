@extends('layouts.front')

@section('content')

<div class="pl-200 pr-200 overflow clearfix">
    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">
            <div class="category-heading">
                <h3> Toutes les catégories <i class="pe-7s-angle-down"></i></h3>
            </div>
            <div class="category-menu-list">
                <ul>
                    @foreach($categories as $category)
                        <li>
                        <a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}<i
                                    class="pe-7s-angle-right"></i></a>

                                    @php
                                        $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                    @endphp

                               @if($children->isNotEmpty())
                                <div class="category-menu-dropdown">

                                    @foreach ($children as $child)
                                        <div class="category-dropdown-style category-common3">
                                            <h4 class="categories-subtitle">
                                                <a href="{{route('products.index', ['category_id' => $child->id])}}">
                                                {{$child->name}}
                                                </a>

                                              </h4>
                                            @php
                                                $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                            @endphp
                                            @if($grandChild->isNotEmpty())
                                                <ul>
                                                    @foreach ($grandChild as $c)
                                                        <li><a href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    @endforeach


                                </div>

                              @endif
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
        <div class="menu-slider-wrapper">
            <div class="menu-style-3 menu-hover text-center">
                <nav>
                    <ul>
                        <li><a href="index.html">Accueil <i class="pe-7s-angle-down"></i> <span
                                    class="sticker-new">hot</span></a>
                            <ul class="single-dropdown">
                                <li><a href="index.html">Nos articles</a></li>
                                <li><a href="index-fashion-2.html">Nos CTF Box</a></li>
                                <li><a href="index-fruits.html">Calendrier des CTF</a></li>
                                <li><a href="index-book.html">Nos partenaires</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#">pages </a>
                            <ul class="single-dropdown">
                                <li><a href="about-us.html">à propos de nous</a></li>
                                <li><a href="login">connexion</a></li>
                                <li><a href="register">s inscrire</a></li>
                                <li><a href="cart">caisse</a></li>
                                <li><a href="wishlist">liste de souhaits</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="shop.html">shop <i class="pe-7s-angle-down"></i> <span
                                    class="sticker-new">hot</span></a>
                            <div class="category-menu-dropdown shop-menu">
                                <div class="category-dropdown-style category-common2 mb-30">
                                    <h4 class="categories-subtitle"> Arbre du Shop</h4>
                                    <ul>
                                        <li><a href="products?category_id=4"> Reverse</a></li>
                                        <li><a href="products?category_id=1"> Forensic</a></li>
                                        <li><a href="products?category_id=5">Réseau</a></li>
                                        <li><a href="products?category_id=6">Stéganographie</a></li>
                                        <li><a href="products?category_id=2"> Pentest Web</a></li>
                                        <li><a href="products?category_id=8">Physique</a></li>
                                        <li><a href="products?category_id=9">Livres</a></li>
                                        <li><a href="products?category_id=10">Programmation</a></li>
                                        <li><a href="products?category_id=7">Cryptanalyse</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common2 mb-30">
                                    <h4 class="categories-subtitle"> produits préférés</h4>
                                    <ul>
                                        <li><a href="products?category_id=2">Metasploit</a></li>
                                        <li><a href="products?category_id=2">ZAP</a></li>
                                        <li><a href="products?category_id=2">Netsparker</a></li>
                                        <li><a href="products?category_id=5">Wireshark</a></li>
                                        <li><a href="products?category_id=2">Dirbuster</a></li>
                                        <li><a href="products?category_id=1">Kali Linux</a></li>
                                        <li><a href="products?category_id=2">Burpsuite</a></li>
                                        <li><a href="products?category_id=7">John The Ripper</a></li>
                                        <li><a href="products?category_id=5">Nmap</a></li>
                                    </ul>
                                </div>
                                <div class="mega-banner-img">
                                    <a href="single-product.html">
                                        <img src="assets/img/banner/bansh.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li><a href="blog.html">Entraîne-toi ! <i class="pe-7s-angle-down"></i> <span
                                    class="sticker-new">hot</span></a>
                            <ul class="single-dropdown">
                                <li><a href="https://www.root-me.org/">Root-me</a></li>
                                <li><a href="https://www.hackthebox.eu/">Hack The Box</a></li>
                                <li><a href="https://w3challs.com/">W3Challs</a></li>
                                <li><a href="https://www.codingame.com/">CodinGame</a></li>
                                <li><a href="https://www.hackthissite.org/">HackThisSite</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173"
                        style="background-image: url(assets/img/slider/msf3.png)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Metasploit <br>Pen Testing Tool</h2>
                            <h4 class="animated">Les meilleurs produits avec garantie </h4>
                            <a class="electro-slider-btn btn-hover" href="products?category_id=2">acheter maintenant</a>
                        </div>
                    </div>
                    <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173"
                        style="background-image: url(assets/img/slider/ida.png)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Hex Rays <br>IDA Pro</h2>
                            <h4 class="animated">Les meilleurs produits avec garantie</h4>
                            <a class="electro-slider-btn btn-hover" href="products?category_id=4">acheter maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="electronic-banner-area">
        <div class="custom-row-2">
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/banner/keyg.png" alt="">
                    <div class="electro-banner-style electro-banner-position">
                        <h1>KeyGrabber USB</h1>
                        <h2>jusqu'à 20% de réduction</h2>
                        <h4>Exclusif à Root Shop !</h4>
                        <a href="products?category_id=8">Acheter maintenant→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/banner/RUBER.png" alt="">
                    <div class="electro-banner-style electro-banner-position2">
                        <h1>Rubber Ducky</h1>
                        <h2>jusqu'à 15% de réduction</h2>
                        <h4>Exclusif à Root Shop !</h4>
                        <a href="products?category_id=8">Acheter maintenant→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="assets/img/banner/kit.png" alt="">
                    <div class="electro-banner-style electro-banner-position3">
                        <h1>Kit de crochetage</h1>
                        <h2>Super Rabais</h2>
                        <h4>Exclusif à Root Shop !</h4>
                        <a href="products?category_id=8">Acheter maintenant→</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">

        <div class="container-fluid">
            <div class="section-title-4 text-center mb-40">
                <h2>Top des produits</h2>
            </div>
            <div class="top-product-style">

                <div>
                    <div id="electro1">
                        <div class="custom-row-2">

                            @foreach($allProducts as $product)
                                @include('product._single_product')

                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
