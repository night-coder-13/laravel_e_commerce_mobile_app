<div class="product-slide-wrapper">
    <!-- Product Slides-->
    <div class="product-slides owl-carousel">
        <!-- Single Hero Slide-->
        {{-- <div class="single-product-slide" style="background-image: url('{{ imageUrl('products/'.$product->primary_image) }}')"></div>
        @foreach ($product->images as $img)
            <div class="single-product-slide" style="background-image: url('{{ imageUrl('products/'.$img->image) }}')"></div>
        @endforeach --}}
        <div class="single-product-slide" style="background-image: url('{{ asset('img/bg-img/6.jpg') }}')"></div>
        <!-- Single Hero Slide-->
        <div class="single-product-slide" style="background-image: url('{{ asset('img/bg-img/10.jpg') }}')"></div>
        <!-- Single Hero Slide-->
        <div class="single-product-slide" style="background-image: url('{{ asset('img/bg-img/11.jpg') }}')"></div>
    </div>
    <!-- Video Button--><a class="video-btn shadow-sm" id="singleProductVideoBtn"
        href="https://www.youtube.com/watch?v=lFGvqvPh5jI"><i class="ti ti-player-play"></i></a>
</div>