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
            <!-- Checkout Wrapper-->
            <div class="checkout-wrapper-area py-3">
                <!-- Billing Address-->
                <div class="billing-information-card mb-3">
                    <div class="card billing-information-title-card">
                        <div class="card-body">
                            <h6 class="text-center mb-0">اطلاعات خریدار</h6>
                        </div>
                    </div>
                    <div class="card user-data-card">
                        <div class="card-body">
                            <div class="single-profile-data d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center"><i class="ti ti-user"></i><span>
                                        نام</span></div>
                                <div class="data-content">{{ auth()->user()->name }}</div>
                            </div>
                            <div class="single-profile-data d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center"><i class="ti ti-mail"></i><span>ایمیل
                                        </span></div>
                                <div class="data-content">{{ auth()->user()->email }}</div>
                            </div>
                            <div class="single-profile-data d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center"><i class="ti ti-phone"></i><span>تلفن</span>
                                </div>
                                <div class="data-content">{{ auth()->user()->phone }}</div>
                            </div>
                            <div class="single-profile-data d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center"><i
                                        class="ti ti-map"></i><span>آدرس:</span></div>
                                <div class="data-content">{{ auth()->user()->address }}</div>
                            </div>
                            <!-- Edit Address--><a class="btn btn-primary w-100" href="{{ route('profile.edit') }}">ویرایش اطلاعات</a>
                        </div>
                    </div>
                </div>
                <!-- Shipping Method Choose-->
                <div class="shipping-method-choose mb-3">
                    <div class="card shipping-method-choose-title-card">
                        <div class="card-body">
                            <h6 class="text-center mb-0">روش ارسال</h6>
                        </div>
                    </div>
                    <div class="card shipping-method-choose-card">
                        <div class="card-body">
                            <div class="shipping-method-choose">
                                <ul class="ps-0">
                                    <li>
                                        <input id="fastShipping" type="radio" name="selector" checked>
                                        <label for="fastShipping">تیپاکس <span>(1 تا 2 روز کاری 45،000 ت)</span></label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input id="fastShipping" type="radio" name="selector">
                                        <label for="fastShipping">پست <span>(1 تا 3 روز کاری 35،000 ت)</span></label>
                                        <div class="check"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart Amount Area-->
                <div class="card cart-amount-area">
                    @if ($coupnPrice != 0)
                            <div class="card-body ">
                                <ul class="list-group">
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
                        <h6 class="total-price mb-0">قابل پرداخت 
                            <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light" alt="">
                                <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark" alt="">
                            <span class="counter">{{ number_format($cart_total_price - $coupnPrice) }}</span>
                        </h6>
                        <a class="btn btn-primary" href="{{ route('payment.send') }}">پرداخت</a>
                        {{-- <form action="{{ route('payment.send') }}">
                            <input type="hidden">
                            <button class="btn btn-primary" type="submit">پرداخت</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
