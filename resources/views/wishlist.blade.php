@extends('layout.master')

@section('title', 'علاقه‌مندی ها')

@section('header')
    @include('body.product.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>

    <div class="page-content-wrapper">
        <div class="py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
                    <h6>لیست محصولات موردعلاقه شما</h6>                    
                </div>
                <div class="row g-2">
                    <div class="col-12">
                        <div class="card horizontal-product-card">
                            <div class="d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                            src="img/product/18.png" alt=""></a>
                                    <!-- Delete  --><a class="delete-btn" href="#"><i class="ti ti-trash"></i></a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block"
                                        href="single-product.html">Nescafe Coffee Jar</a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="ti ti-currency-dollar"></i>$64<span>$89</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="ti ti-star-filled"></i>4.88 <span
                                            class="ms-1">(39 review)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Weekly Product Card -->
                    <div class="col-12">
                        <div class="card horizontal-product-card">
                            <div class="d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                            src="img/product/7.png" alt=""></a>
                                    <!-- Delete  --><a class="delete-btn" href="#"><i class="ti ti-trash"></i></a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block" href="single-product.html">Modern
                                        Office Chair</a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="ti ti-currency-dollar"></i>$99<span>$159</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="ti ti-star-filled"></i>4.82 <span
                                            class="ms-1">(125 review)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Weekly Product Card -->
                    <div class="col-12">
                        <div class="card horizontal-product-card">
                            <div class="d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                            src="img/product/12.png" alt=""></a>
                                    <!-- Delete  --><a class="delete-btn" href="#"><i class="ti ti-trash"></i></a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block" href="single-product.html">Beach
                                        Sunglasses</a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="ti ti-currency-dollar"></i>$24<span>$32</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="ti ti-star-filled"></i>4.79 <span
                                            class="ms-1">(63 review)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Weekly Product Card -->
                    <div class="col-12">
                        <div class="card horizontal-product-card">
                            <div class="d-flex align-items-center">
                                <div class="product-thumbnail-side">
                                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                            src="img/product/17.png" alt=""></a>
                                    <!-- Delete  --><a class="delete-btn" href="#"><i class="ti ti-trash"></i></a>
                                </div>
                                <div class="product-description">
                                    <!-- Product Title --><a class="product-title d-block" href="single-product.html">Meow
                                        Mix Cat Food</a>
                                    <!-- Price -->
                                    <p class="sale-price"><i class="ti ti-currency-dollar"></i>$11.49<span>$13</span></p>
                                    <!-- Rating -->
                                    <div class="product-rating"><i class="ti ti-star-filled"></i>4.78 <span
                                            class="ms-1">(7 review)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Select All Products-->
                    <div class="col-12">
                        <div class="select-all-products-btn mt-2"><a class="btn btn-primary btn-lg w-100" href="#"><i
                                    class="ti ti-circle-check me-1 h6"></i>Add all items to cart</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
