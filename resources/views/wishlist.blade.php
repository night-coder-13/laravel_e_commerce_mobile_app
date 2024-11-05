@extends('layout.master')

@section('title', 'علاقه‌مندی ها')

@section('header')
    @include('body.navbar')
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
                    <!-- Weekly Product Card -->
                    <x-list-product />
                    
                    <!-- Select All Products-->
                    <div class="col-12">
                        <div class="select-all-products-btn mt-2"><a class="btn btn-primary btn-lg w-100" href="#"><i
                                    class="ti ti-circle-check me-1 h6"></i>افزودن همه به سبد خرید</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
