<div class="col-12">
    <div class="card horizontal-product-card">
        <div class="d-flex align-items-center">
            <div class="product-thumbnail-side">
                <!-- Thumbnail -->
                <a class="product-thumbnail d-block" href="single-product.html"><img
                        src="{{ ImageUrl('products/' . $item->primary_image) }}" alt=""></a>
                <!-- remove  -->
                <a class="delete-btn" href="{{ route('wishlist.remove', ['id' => $id]) }}">
                    <i class="ti ti-trash"></i>
                </a>
            </div>
            <div class="product-description">
                <!-- Product Title --><a class="product-title d-block"
                    href="{{ route('product', ['id' => $item->id]) }}">{{ $item->name }}</a>
                <!-- Price -->
                <p class="sale-price">
                    <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light" alt="">
                    <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark" alt="">
                    @if ($item->sale_price != 0 && checkSaleFrom($item->date_on_sale_from) && checkSaleTo($item->date_on_sale_to))
                        {{ $item->sale_price }}<span>{{ $item->price }}</span>
                    @else
                        {{ $item->price }}
                    @endif

                </p>
                <!-- Rating -->
                <div class="product-rating"><i class="ti ti-star-filled"></i>{{ $item->popularity_score }} <span
                        class="ms-1">({{ $item->sales_count }} فروش)</span></div>
            </div>
        </div>
    </div>
</div>
