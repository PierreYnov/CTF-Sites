@extends('layouts.front')


@section('content')


<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210"
    style="background-image: url(/assets/img/bg/bgha.png)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2> grille des magasins</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li>grille des magasins</li>
            </ul>
        </div>
    </div>
</div>


    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-sidebar mr-50">
                        <div class="sidebar-widget mb-50">
                            <h3 class="sidebar-title">Recherche de produits</h3>
                            <div class="sidebar-search">
                                <form action="#">
                                    <input placeholder="Rechercher des produits..." type="text">
                                    <button><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">Filtrer par prix</h3>
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <label>prix : </label>
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                    <button type="button">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-45">
                            <h3 class="sidebar-title">Catégories</h3>
                            <div class="sidebar-categories">
                                <ul>
                                    <li><a href="#">Web <span>4</span></a></li>
                                    <li><a href="#">Réseau <span>9</span></a></li>
                                    <li><a href="#">Forensic <span>5</span> </a></li>
                                    <li><a href="#">Ebook <span>3</span></a></li>
                                    <li><a href="#">Physique <span>4</span></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">Langue</h3>
                            <div class="product-size">
                                <ul>
                                    <li><a href="#">EN</a></li>
                                    <li><a href="#">FR</a></li>
                                    <li><a href="#">DE</a></li>
                                    <li><a href="#">ES</a></li>
                                    <li><a href="#">RU</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h3 class="sidebar-title">tag</h3>
                            <div class="product-tags">
                                <ul>
                                    <li><a href="#">Web</a></li>
                                    <li><a href="#">Réseau</a></li>
                                    <li><a href="#">Ebook</a></li>
                                    <li><a href="#">Forensic</a></li>
                                    <li><a href="#">Physique</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-50">
                            <h3 class="sidebar-title">Produits les mieux notés</h3>
                            <div class="sidebar-top-rated-all">
                                
                                
                                <div class="sidebar-top-rated mb-30">
                                    <div class="single-top-rated">
                                        <div class="top-rated-img">
                                            <a href="#"><img src="/assets/img/product/sidebar-product/zap.png" alt=""></a>
                                        </div>
                                        <div class="top-rated-text">
                                            <h4><a href="#">OWASP ZAP</a></h4>
                                            <div class="top-rated-rating">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <span>140.00 €</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-top-rated mb-30">
                                    <div class="single-top-rated">
                                        <div class="top-rated-img">
                                            <a href="#"><img src="/assets/img/product/sidebar-product/metasploit-logo.png" alt=""></a>
                                        </div>
                                        <div class="top-rated-text">
                                            <h4><a href="#">Metasploit</a></h4>
                                            <div class="top-rated-rating">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                            <span>60.00 €</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop-product-wrapper res-xl res-xl-btn">
                        <div class="shop-bar-area">
                            <div class="shop-bar pb-60">
                                <div class="shop-found-selector">
                                    <div class="shop-found">
                                        <p><span>{{$products->total()}}</span> Produits trouvés </p>
                                    </div>

                                </div>

                            </div>
                            <div class="shop-product-content tab-content">
                                <div id="grid-sidebar1" class="tab-pane fade active show">
                                    <div class="row">
                                        @foreach($products as $product)
                                                @include('product._single_product')
                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                        {{$products->appends(['query'=>request('query')])->render()}}
                </div>
            </div>
        </div>
    </div>

@endsection
