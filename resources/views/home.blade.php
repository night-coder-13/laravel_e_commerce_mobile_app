@extends('layout.master')

@section('title', 'فروشگاه ژیلا')

@section('header')
    @include('body.home.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>

    <div class="page-content-wrapper">
        <!-- Search Form-->
        @include('body.home.search')

        <!-- Hero Wrapper -->
        @include('body.home.heroWapper')

        <!-- Product Catagories -->
        @include('body.home.catagories')

        <!-- Flash Sale Slide -->
        @include('body.home.flashSaleSlide')
        <!-- Dark Mode -->
        <div class="container">
            <div class="dark-mode-wrapper mt-3 bg-img p-4 p-lg-5">
                <p class="text-white">You can change your display to a dark background using a dark mode.</p>
                <div class="form-check form-switch mb-0">
                    <label class="form-check-label text-white h6 mb-0" for="darkSwitch">Switch to Dark Mode</label>
                    <input class="form-check-input" id="darkSwitch" type="checkbox" role="switch">
                </div>
            </div>
        </div>
        <!-- Top Products -->
        @include('body.home.topProducts')

        <!-- CTA Area -->
        <div class="container">
            <div class="cta-text dir-rtl p-4 p-lg-5">
                <div class="row">
                    <div class="col-9">
                        <h5 class="text-white">20 درصد تفیف ویژه برای محصولات لوازم آرایشی بهداشتی.</h5><a
                            class="btn btn-primary" href="#">مشاهده محصولات</a>
                    </div>
                </div><img src="img/bg-img/make-up.png" alt="">
            </div>
        </div>
        <!-- Weekly Best Sellers-->
        @include('body.home.weeklyBestSellers')

        <!-- Discount Coupon Card-->
        <div class="container">
            <div class="discount-coupon-card p-4 p-lg-5 dir-rtl">
                <div class="d-flex align-items-center">
                    <div class="discountIcon"><img class="w-100" src="img/core-img/discount.png" alt=""></div>
                    <div class="text-content">
                        <h5 class="text-white mb-2">خرید اولی ها!</h5>
                        <p class="text-white mb-0">با اولین خرید 20% تخفیف بگیرید<span class="px-1 fw-bold">GET20</span>کد
                            تخفیف را در قسمت صورت حساب وارد کنید.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Products Wrapper-->
        {{-- @include('body.home.featuredProductsWrapper') --}}
        @include('body.home.collections')


    </div>
    
@endsection
