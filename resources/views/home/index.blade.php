@extends('layout.master')

@section('title', 'فروشگاه صباح')

@section('header')
    @include('home.body.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>

    <div class="page-content-wrapper">
        <!-- Search Form-->
        @include('home.body.search')

        <!-- Hero Wrapper -->
        @include('home.body.heroWapper')

        <!-- Product Catagories -->
        @include('home.body.catagories')

        <!-- Flash Sale Slide -->
        @include('home.body.flashSaleSlide')
        <!-- Dark Mode -->
        <div class="container">
            <div class="dark-mode-wrapper mt-3 bg-img p-4 p-lg-5">
                <p class="text-white">شما می‌توانید قالب وب سایت را به حالت شب و یا روز تغییر دهید.</p>
                <div class="form-check form-switch mb-0">
                    <label class="form-check-label text-white h6 mb-0" for="darkSwitch">تغییر حالت</label>
                    <input class="form-check-input" id="darkSwitch" type="checkbox" role="switch">
                </div>
            </div>
        </div>
        <!-- Top Products -->
        @include('home.body.topProducts')

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
        @include('home.body.weeklyBestSellers')

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
        {{-- @include('home.body.featuredProductsWrapper') --}}
        @include('home.body.collections')


    </div>
    
@endsection
