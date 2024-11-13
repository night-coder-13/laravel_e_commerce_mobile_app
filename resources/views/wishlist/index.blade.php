@extends('layout.master')

@section('title', 'علاقه‌مندی ها')

@section('header')
    @include('home.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>

    <div class="page-content-wrapper">
        <div class="py-3">
            <div class="container">
                @if ($wishlists->isEmpty())
                    <div class=" py-3 d-flex align-items-center justify-content-center">
                        <div class=" text-center mt-5">
                            <i class="ti ti-mood-sad" style="font-size: 8rem;"></i>
                            <h6 class="mt-2"> !لیست علاقه‌مندی ها خالی است </h6>
                            <a class="btn btn-primary btn-sm mt-3" href="{{ route('home') }}">بازگشت به صفحه‌اصلی</a>
                        </div>
                    </div>
                @else
                    <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
                        <h6>لیست محصولات موردعلاقه شما</h6>
                    </div>
                    <div class="row g-2">
                        <!-- Weekly Product Card -->
                        @foreach ($wishlists as $item)
                            <x-list-product :id="$item->id" :item="$item->product" />
                        @endforeach

                        <!-- Select All Products-->
                        <div class="col-12">
                            <div class="select-all-products-btn mt-2"><a class="btn btn-primary btn-lg w-100"
                                    href="#"><i class="ti ti-circle-check me-1 h6"></i>افزودن همه به سبد خرید</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
