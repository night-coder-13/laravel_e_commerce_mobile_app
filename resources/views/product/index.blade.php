@extends('layout.master')

@section('title', 'فروشگاه صباح')

@section('header')
    @include('product.navbar')
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.box-color-size').hide();

            $('input[name="size"]').on('change', function() {
                $('.mess-color-size').hide();

                // ابتدا همه divها را پنهان کن
                $('.box-color-size').hide();

                // div مطابق با مقدار انتخاب شده را نمایش بده
                var selectedValue = $(this).val();
                $('#size--product').val(selectedValue);
                $('#' + selectedValue).css('display', 'flex');
            });

            $('input[name="color"]').on('change', function() {
                var selectedValue = $(this).val();
                $('#color--product').val(selectedValue);
            });
        });
    </script>
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        @include('product.product.slider')

        <div class="product-description pb-3">
            <!-- Product Title & Meta Data-->
            @include('product.product.title')
            @if ($product->sale_price != 0 && checkSaleFrom($product->date_on_sale_from) && checkSaleTo($product->date_on_sale_to))
                <!-- Flash Sale Panel-->
                @include('product.product.flashSale')
            @endif
            {{-- {{ dd($sizes) }} --}}
            @if ($product->sizes->isNotEmpty())
                <!-- Selection Panel-->
                @include('product.product.selection')
            @endif


            <!-- Add To Cart-->
            @include('product.product.addCart')

            <!-- Product Specification-->
            <div class="p-specification bg-white mb-3 py-3">
                <div class="container">
                    <h6>مشخصات</h6>
                    <p>
                        {{ $product->description }}
                    </p>
                </div>
            </div>
            <!-- Product Video -->
            <div class="bg-img" style="background-image: url(img/product/18.jpg)">
                <div class="container">
                    <div class="video-cta-content d-flex align-items-center justify-content-center">
                        <div class="video-text text-center">
                            <h4 class="mb-4">ویدئو معرفی محصول</h4><a class="btn btn-primary rounded-circle"
                                id="videoButton" href="https://www.youtube.com/watch?v=lFGvqvPh5jI"><i
                                    class="ti ti-player-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-3"></div>
            <!-- Related Products Slides-->
            @include('product.product.relatedProducts')

            <!-- Rating & Review Wrapper --><!-- Ratings Submit Form-->
            @include('product.product.commentsSubmit')
        </div>
    </div>
@endsection
