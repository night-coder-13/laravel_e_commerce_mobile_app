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
            <div class=" py-3 d-flex align-items-center justify-content-center">
                <div class=" text-center mt-3">
                    @if ($status)
                        <i class="ti ti-circle-check mb-3" style="font-size: 8rem;color:rgb(12, 234, 90);"></i>
                        <h6> تراکنش با موفقیت انجام شد!</h6>
                        <p>کد پیگیری : {{ $transId }}</p>
                        <a class="btn btn-primary btn-sm mt-3" href="{{ route('home') }}">بازگشت به صفحه‌اصلی</a>
                    @else
                        <i class="ti ti-mood-sad" style="font-size: 8rem;"></i>
                        <h6> تراکنش با خطا مواجه شد!</h6>
                        <a class="btn btn-primary btn-sm mt-3" href="{{ route('cart.index') }}">بازگشت به سبدخرید</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
