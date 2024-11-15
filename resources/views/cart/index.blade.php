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
                                    <form action="{{ route('cart.checkCoupon') }}">
                                        <input class="form-control" name="code" value="{{ old('code') }}"
                                            type="text" placeholder="SUHA30">
                                        <button class="btn btn-primary" type="submit">ثبت</button>
                                    </form>
                                    <p class="text-danger">
                                        @error('code')
                                            {{ $message }}
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Amount Area-->
                    <div class="card cart-amount-area">
                        @php
                            $coupnPrice = 0;
                            if (request()->session()->has('coupon') && request()->session()->get('coupon') !== []) {
                                $coupon = request()->session()->get('coupon');
                                $couponCode = $coupon['code'];
                                $couponPercent = $coupon['percent'];
                                $coupnPrice = ($cart_total_price * $couponPercent) / 100;
                            }
                        @endphp

                        @if ($coupnPrice != 0)
                            <div class="card-body ">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="text-end">کد تخفیف</span>
                                        <span class="text-start">{{ $couponCode }} 
                                            <a href="{{ route('cart.removeCoupon') }}" class="btn btn-sm btn-danger">حذف کد</a>
                                        </span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="text-end">مبلغ تخفیف</span>
                                        <span class="text-start">{{ number_format($coupnPrice) }} تومان</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="text-end">مبلغ بدون تخفیف</span>
                                        <span class="text-start">{{ number_format($cart_total_price) }} تومان</span>
                                    </li>
                                </ul>
                               
                            </div>
                        @endif
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h6 class="total-price mb-0">
                                <span class=""> قابل پرداخت : </span>
                                <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light" alt="">
                                <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark" alt="">
                                <span class="counter">
                                    {{ number_format($cart_total_price - $coupnPrice) }}</span>
                            </h6>
                            <a class="btn btn-primary" href="{{ route('cart.checkout') }}">صورت حساب</a>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
