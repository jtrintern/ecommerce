@extends('toyspace.index_master')
@section('title', 'TOYSPACE. INC | Single Product')

@section('content')
<main id="main">
    <section class="product-detail" id="product-detail">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-7">
                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                        <!-- slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset ('toyspace/assets/img/slider-single/1.png') }}"
                                    alt="Hills">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset ('toyspace/assets/img/slider-single/1.png') }}"
                                    alt="Hills">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset ('toyspace/assets/img/slider-single/1.png') }}"
                                    alt="Hills">
                            </div>

                            <div class="carousel-item">
                                <img src="{{ asset ('toyspace/assets/img/slider-single/1.png') }}"
                                    alt="Hills">
                            </div>
                        </div>

                        <!-- Thumbnails -->
                        <ol class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                    data-target="#custCarousel">
                                    <img src="{{ asset ('toyspace/assets/img/slider-single/1.png') }}"
                                        class="img-fluid">
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
                                    <img src="{{ asset ('toyspace/assets/img/slider-single/1.png') }}"
                                        class="img-fluid">
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel">
                                    <img src="{{ asset ('toyspace/assets/img/slider-single/1.png') }}"
                                        class="img-fluid">
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel">
                                    <img src="{{ asset ('toyspace/assets/img/slider-single/1.png') }}"
                                        class="img-fluid">
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-5 product-info">
                    <div class="title-product">
                        <h4>HOTSALE</h4>
                        <h3>Hasbro Games Monopoli Classic Game - GSCC1009</h3>
                    </div>
                    <div class="description">
                        <div class="harga">
                            <div class="harga d-flex">
                                <h3>Rp 189.999 </h3>
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                    class="fa-solid fa-star"></i>
                                <h4>4.9 (2130 reviews)</h4>
                            </div>
                        </div>
                        <div class="desc">
                            <h4>Description:</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.</p>
                        </div>
                    </div>
                    <div class="add-cart d-flex">
                        <div class="col-1 qty" style="padding:0">
                            <h5>Qty</h5>
                        </div>
                        <div class="col-5 quantity" style="padding:0">
                            <button class="decrease">-</button>
                            <span class="count">1</span>
                            <button class="increase">+</button>
                        </div>
                        <div class="col-6 entry-button  justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" style="padding:0">
                            <a class="btn-entry" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
