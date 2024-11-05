@extends('layout.master')

@section('title', 'فروشگاه ژیلا')

@section('header')
    @include('body.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        @include('body.product.slider')

        <div class="product-description pb-3">
            <!-- Product Title & Meta Data-->
            @include('body.product.title')

            <!-- Flash Sale Panel-->
            @include('body.product.flashSale')

            <!-- Selection Panel-->
            @include('body.product.selection')

            <!-- Add To Cart-->
            @include('body.product.addCart')

            <!-- Product Specification-->
            <div class="p-specification bg-white mb-3 py-3">
                <div class="container">
                    <h6>مشخصات</h6>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.?</p>
                    <ul class="mb-3 ps-3">
                        <li><i class="ti ti-check me-1"></i> لورم ایپسوم متن سادگی نامفهوم از صنعت چاپ</li>
                        <li><i class="ti ti-check me-1"></i> لورم ایپسوم متن ساختگی بااز صنعت چاپ</li>
                        <li> <i class="ti ti-check me-1"></i> لورم ایپسوم متن</li>
                        <li> <i class="ti ti-check me-1"></i> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</li>
                    </ul>
                    <p class="mb-0">وقتی ثروت‌ های بزرگ به دست برخی مردم می‌افتد در پرتو آن نیرومند می‌شوند و در سایهٔ
                        نیرومندی و ثروت خیال می‌ کنند که می‌توانند در خارج از وطن خود زندگی نمایند و خوشبخت و سرافراز باشند
                        ولی به زودی می‌ فهمند که اشتباه کرده‌ اند و عظمت هر ملتی بر روی خرابه‌ های وطن خودش می‌باشد و بس!?
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
           @include('body.product.relatedProducts')

            <!-- Rating & Review Wrapper --><!-- Ratings Submit Form-->
            @include('body.product.commentsSubmit')
        </div>
    </div>
@endsection
