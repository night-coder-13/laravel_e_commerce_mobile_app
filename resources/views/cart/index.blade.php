@extends('layout.master')

@section('title', 'دسته بندی محصولات')

@section('header')
    @include('home.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        <div class="container">
            <!-- Cart Wrapper-->
            @if ($cart == [])
                <div class=" py-3 d-flex align-items-center justify-content-center">
                    <div class=" text-center mt-3">
                        <img class="mb-4 px-4" width="250px" src="img/bg-img/empty-cart.png" alt="">
                        <h6> ! سبد خرید خالی است</h6>
                        <a class="btn btn-primary btn-sm mt-3" href="{{ route('home') }}">بازگشت به صفحه‌اصلی</a>
                    </div>
                </div>
            @else
                <div class="cart-wrapper-area py-3">
                    <div class="row g-2 mb-3">
                        @foreach ($cart as $key => $item)
                            <x-cart-product :key="$key" :item="$item" />
                        @endforeach

                    </div>
                    <!-- Coupon Area-->
                    <div class="card coupon-card mb-3">
                        <div class="card-body">
                            <div class="apply-coupon">
                                <h6 class="mb-0">کد تخفیف دارید؟</h6>
                                <p class="mb-2">کد تخفیف خودرا وارد کنید!</p>
                                <div class="coupon-form">
                                    <form action="#">
                                        <input class="form-control" type="text" placeholder="SUHA30">
                                        <button class="btn btn-primary" type="submit">ثبت</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Amount Area-->
                    <div class="card cart-amount-area">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h5 class="total-price mb-0"> <span class=""> تومان </span> <span
                                    class="counter">{{ number_format($cart_total_price) }}</span></h5><a
                                class="btn btn-primary" href="checkout.html">صورت حساب</a>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
