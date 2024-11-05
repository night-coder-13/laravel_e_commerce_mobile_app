@extends('layout.master')

@section('title', 'دسته بندی محصولات')

@section('header')
    @include('body.category.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        <!-- Catagory Banner-->
        <div class="pt-3">
            <div class="container">
                <div class="catagory-single-img" style="background-image: url('img/bg-img/5.jpg')"></div>
            </div>
        </div>
        <!-- Product Catagories-->
        <div class="product-catagories-wrapper py-3">
            <div class="container">
                <div class="section-heading rtl-text-right">
                    <h6>دسته بندی های مرتبط</h6>
                </div>
                <div class="product-catagory-wrap">
                    <div class="row g-2 rtl-flex-d-row-r">
                        <!-- Catagory Card -->
                        @for ($i = 1; $i < 9; $i++)
                            <x-category />
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Products-->
        <div class="top-products-area pb-3">
            <div class="container">
                <div class="section-heading rtl-text-right">
                    <h6>محصولات</h6>
                </div>
                <div class="row g-2 rtl-flex-d-row-r">
                    <!-- Product Card -->
                    @for ($i = 1; $i < 13; $i++)
                        <x-product :i="$i" />
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
