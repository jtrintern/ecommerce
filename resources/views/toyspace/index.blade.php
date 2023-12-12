@extends('toyspace.index_master')
@section('title', 'TOYSPACE. INC | Home')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero1" class="d-flex align-items-center">

    <div class="container align-items-center">
        <div class="row">
            <div class="row image" style="margin-right: 0;">
                <div class="col-lg-8" data-aos="fade-right" style="margin: 0; padding:0;">
                    <!-- <img src="{{ asset ('toyspace/assets/img/hero-1.png') }}"
                        class="img-fluid" alt="Gambar Kiri"> -->
                    <div id="heroCarousel" data-bs-interval="1000" class="carousel slide carousel-fade"
                        data-bs-ride="carousel">

                        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                        <div class="carousel-inner" role="listbox">

                            <!-- Slide 1 -->
                            <div class="carousel-item active"
                                style="background-image: url({{ asset ('toyspace/assets/img/hero.png') }})">
                            </div>

                            <!-- Slide 2 -->
                            <div class="carousel-item"
                                style="background-image: url({{ asset ('toyspace/assets/img/hero-2.png') }})">
                            </div>

                            <!-- Slide 3 -->
                            <div class="carousel-item"
                                style="background-image: url({{ asset ('toyspace/assets/img/hero-3.png') }})">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 image-right" data-aos="fade-left" style="margin: 0; padding:0;">
                    <img src="{{ asset ('toyspace/assets/img/hero-2.png') }}"
                        class="img-fluid" alt="Gambar Atas">
                    <img src="{{ asset ('toyspace/assets/img/hero-3.png') }}"
                        class="img-fluid" alt="Gambar Bawah" style="margin-top: 16px">
                </div>
            </div>

            <div class="kategori d-flex align-items-center justify-content-between">
                <div class="col-2 justify-content-center align-items-center">
                    <h4>Building</h4>
                </div>
                <div class="col-2 justify-content-center align-items-center">
                    <h4>Dolls</h4>
                </div>
                <div class="col-2 justify-content-center align-items-center">
                    <h4>Vehicle</h4>
                </div>
                <div class="col-2 justify-content-center align-items-center">
                    <h4>Puzzles</h4>
                </div>
                <div class="col-2 justify-content-center align-items-center">
                    <h4>Animals</h4>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">
    <section id="featured-product2" class="featured-product2">
        <div class="container">

            <div class="sec-title">
                <h3>Featured Product</h3>
                <p>Next level poutine in meh ea bruh mlkshk umami microdosing <br>lyft dolore nostrud. In franzen
                    bicycle rights, semiotics shaman.</p>
            </div>

            <div class="row product-slider swiper" data-aos="fade-left">
                <div class="swiper-wrapper align-items-center justify-content-between">
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <!-- <div class="product col"> -->
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-1.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Classic Teddy Bear</h2>
                            <h4 class="price">Rp 89.000</h4>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <!-- <div class="product col"> -->
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-2.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Classic Teddy Bear</h2>
                            <h4 class="price">Rp 89.000</h4>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <!-- <div class="product col"> -->
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-3.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Classic Teddy Bear</h2>
                            <h4 class="price">Rp 89.000</h4>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <!-- <div class="product col"> -->
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-4.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Classic Teddy Bear</h2>
                            <h4 class="price">Rp 89.000</h4>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <!-- <div class="product col"> -->
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-1.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Classic Teddy Bear</h2>
                            <h4 class="price">Rp 89.000</h4>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="swiper-slide col-lg-3 col-md-6">
                        <!-- <div class="product col"> -->
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-2.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Classic Teddy Bear</h2>
                            <h4 class="price">Rp 89.000</h4>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>

        </div>
    </section>

    <section id="wcu" class="wcu">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="col-lg-4 text justify-content-center align-items-center">
                <h3>Why Choose Us?</h3>
                <p>Next level poutine in meh ea bruh mlkshk umami microdosing lyft dolore nostrud. In franzen bicycle
                    rights, semiotics shaman.</p>
            </div>
            <div class="col-lg-2 shipping justify-content-center align-items-center">
                <div class="circle"></div>
                <h4>Free Shipping</h4>
            </div>
            <div class="col-lg-2 gift justify-content-center align-items-center">
                <div class="circle"></div>
                <h4>
                    Gift Card
                </h4>
            </div>
            <div class="col-lg-2 return justify-content-center align-items-center">
                <div class="circle"></div>
                <h4>14 Days Return</h4>
            </div>
        </div>
    </section>

    <section id="banner" class="banner">
        <div class="container">
            <div class="banner-con d-flex">
                <div class="content col-lg-6">
                    <h4>NEW COLLECTIONS</h4>
                    <h3>Marvel Studios</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <button type="button">Shop Now <i class="bi bi-arrow-right"></i></button>
                </div>
                <div class="image col-lg-6">
                    <img src="{{ asset ('toyspace/assets/img/banner.png') }}"
                        class="img-banner" alt="Floating Image">
                </div>
            </div>
        </div>
    </section>

    <section id="featured-product" class="featured-product">
        <div class="container">
            <div class="sec-title">
                <h3>Featured Product</h3>
                <p>Next level poutine in meh ea bruh mlkshk umami microdosing <br>lyft dolore nostrud. In franzen
                    bicycle rights, semiotics shaman.</p>
            </div>
            <div class="products row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3 align-items-center justify-content-between"
                data-aos="fade-up">
                <div class="product col">
                    <a href="{{ route ('singleProduct') }}">
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-1.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title">Classic Teddy Bear</h2>
                        <h4 class="price">Rp 89.000</h4>
                    </div>
                </div>
                <div class="product col">
                    <a href="{{ route ('singleProduct') }}">
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-2.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title">Classic Teddy Bear</h2>
                        <h4 class="price">Rp 89.000</h4>
                    </div>
                </div>
                <div class="product col">
                    <a href="{{ route ('singleProduct') }}">
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-3.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title">Classic Teddy Bear</h2>
                        <h4 class="price">Rp 89.000</h4>
                    </div>
                </div>
                <div class="product col">
                    <a href="{{ route ('singleProduct') }}">
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-4.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title">Classic Teddy Bear</h2>
                        <h4 class="price">Rp 89.000</h4>
                    </div>
                </div>
                <div class="product col">
                    <a href="{{ route ('singleProduct') }}">
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-1.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title">Classic Teddy Bear</h2>
                        <h4 class="price">Rp 89.000</h4>
                    </div>
                </div>
                <div class="product col">
                    <a href="{{ route ('singleProduct') }}">
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-2.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title">Classic Teddy Bear</h2>
                        <h4 class="price">Rp 89.000</h4>
                    </div>
                </div>
                <div class="product col">
                    <a href="{{ route ('singleProduct') }}">
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-3.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title">Classic Teddy Bear</h2>
                        <h4 class="price">Rp 89.000</h4>
                    </div>
                </div>
                <div class="product col">
                    <a href="{{ route ('singleProduct') }}">
                        <div class="card card-product shadow-sm h-10">
                            <img class="card-img-top"
                                src='{{ asset ("toyspace/assets/img/products/product-4.png") }}'
                                alt=''>
                            <div class="card-overlay">
                                <span>See Details</span>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <h2 class="card-title">Classic Teddy Bear</h2>
                        <h4 class="price">Rp 89.000</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- End #main -->
@endsection
