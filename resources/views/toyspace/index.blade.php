@extends('toyspace.index_master')
@section('title', 'TOYSPACE. INC | Home')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container align-items-center">
        <div class="row">
            <!-- <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Temukan Kendaraan Impian untuk <br>Perjalanan yang Tidak Terlupakan!</h1>
                    <h2>rentCAR, siap membawa anda menuju petualangan yang tak terlupakan</h2>
                </div> -->
            <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                                  <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                                </div> -->

            <div class="row image" style="margin-right: 0;">
                <div class="col-lg-8" data-aos="fade-right" style="margin: 0; padding:0;">
                    <!-- Gambar sebelah kiri -->
                    <img src="{{ asset ('toyspace/assets/img/hero-1.png') }}"
                        class="img-fluid" alt="Gambar Kiri">
                </div>
                <div class="col-lg-4 image-right" data-aos="fade-left" style="margin: 0; padding:0;">
                    <!-- Gambar atas -->
                    <img src="{{ asset ('toyspace/assets/img/hero-2.png') }}"
                        class="img-fluid" alt="Gambar Atas">
                    <!-- Gambar bawah -->
                    <img src="{{ asset ('toyspace/assets/img/hero-3.png') }}"
                        class="img-fluid pt-3" alt="Gambar Bawah">
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
    <section id="featured-product" class="featured-product">
        <div class="container">
            <div class="sec-title">
                <h3>Featured Product</h3>
                <p>Next level poutine in meh ea bruh mlkshk umami microdosing <br>lyft dolore nostrud. In franzen
                    bicycle rights, semiotics shaman.</p>
            </div>
            <div class="products row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3"
                data-aos="fade-up">
                <div class="product col">
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
                </div>
                <div class="product col">
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
                </div>
                <div class="product col">
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
                </div>
                <div class="product col">
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
                </div>
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


</main>
<!-- End #main -->
@endsection
