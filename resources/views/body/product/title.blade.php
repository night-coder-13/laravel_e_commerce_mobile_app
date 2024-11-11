<div class="product-title-meta-data bg-white mb-3 py-3">
    <div class="container d-flex justify-content-between rtl-flex-d-row-r">
        <div class="p-title-price">
            <h5 class="mb-1">{{ $product->name }}</h5>
            @if ($product->sale_price != 0 && checkSaleFrom($product->date_on_sale_from) && checkSaleTo($product->date_on_sale_to))
                <p class="sale-price mb-0 lh-1">
                    <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light" alt="">
                    <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark" alt="">
                    {{ $product->sale_price }}<span>{{ $product->price }}</span>
                </p>
            @else
                <p class="price mb-0 lh-1">
                    <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light" alt="">
                    <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark" alt="">
                    {{ $product->price }}
                </p>
            @endif
        </div>
        <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="ti ti-heart"></i></a></div>
    </div>
    <!-- Ratings-->
    <div class="product-ratings">
        <div class="container d-flex align-items-center justify-content-between rtl-flex-d-row-r">
            <div class="ratings"><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i
                    class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i
                    class="ti ti-star-filled"></i><span class="ps-1">3 امتیاز</span></div>
            <div class="total-result-of-ratings"><span>5.0</span><span>محبوب</span></div>
        </div>
    </div>
</div>
