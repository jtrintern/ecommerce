@extends('toyspace.index_master')
@section('title', 'TOYSPACE. INC | Shop Product')

@section('content')

<main id="shop_cart_page" class="shop_cart_page">
    <section id="title-cart" class="title-cart">
        <div class="container">
            <h3>Shopping Cart</h3>
        </div>
    </section>
    <section id="shop-cart" class="shop-cart">
        <div class="container">
            <div class="title d-flex">
                <div class="col-4">
                    <h4>Product</h4>
                </div>
                <div class="col-2">
                    <h4>Price</h4>
                </div>
                <div class="col-2">
                    <h4>Quantity</h4>
                </div>
                <div class="col-2">
                    <h4>Subtotal</h4>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="product-det d-flex">
                <div class="col-4">
                    <h4>Hasbro Games Monopoli Classic Game - GSCC1009</h4>
                </div>
                <div class="col-2">
                    <h4>Rp 189.999</h4>
                </div>
                <div class="col-2 quantity"><button class="decrease">-</button>
                    <span class="count">1</span>
                    <button class="increase">+</button></div>
                <div class="col-2">
                    <h4>Rp 379.998</h4>
                </div>
                <div class="col-2">
                    <button type="button" rel="tooltip" class="btn btn-icon btn-simple"
                        style="background-color: #DD322B; color:#fff; padding: 5px 10px;" data-toggle="modal"
                        data-target="#editModal"><i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="cart-total" class="cart-total">
        <div class="container">
            <div class="col-12 titles">
                <h4>Cart Total</h4>
            </div>
            <div class="body sub-total d-flex">
                <div class="col-4 title">Subtotal</div>
                <div class="col-4 harga">Rp 189.999</div>
            </div>
            <div class="body shipping d-flex">
                <div class="col-4">
                    <h3>Shipping :</h3>
                    <h4>Shipping to Banyuwangi, Jawa Timur</h4>
                </div>
                <div class="col-4">
                    <h4>Rp 23.000</4>
                </div>
            </div>
            <div class="body change-ship">
                <div class="col-12">Change Shipping Address</div>
            </div>
            <div class="body total d-flex" style="border: none;">
                <div class="col-4" style="font-weight: bold;">Total</div>
                <div class="col-4">Rp 212.999</div>
            </div>
        </div>
    </section>
</main>

@endsection
