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
                <div class="catagory-single-img" style="background-image: url('{{ ImageUrl('categories/' . $category->primary_image) }}')"></div>
            </div>
        </div>

        <!-- Top Products-->
        <div class="top-products-area pb-3 mt-2">
            <div class="container">
                <div class="section-heading rtl-text-right">
                    <h6>محصولات</h6>
                </div>
                <div class="row g-2 rtl-flex-d-row-r">
                    <!-- Product Card -->
                    @foreach ($products as $item)
                        <x-product :item="$item" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
