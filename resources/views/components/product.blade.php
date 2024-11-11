<!-- Product Card -->

        <div class="card-body">
            @if ($item->sale_price != 0 && checkSaleFrom($item->date_on_sale_from) && checkSaleTo($item->date_on_sale_to))
                <span class="badge rounded-pill badge-warning">ویژه</span>
            @endif
            <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="ti ti-heart">
                </i></a>
            <!-- Thumbnail -->
            <a class="product-thumbnail d-block" href="{{ route('product', ['id' => $item->id]) }}">
                <img class="mb-2" src="{{ ImageUrl('products/' . $item->primary_image) }}" alt="">
            </a>
            <!-- Product Title -->
            <a class="product-title" href="{{ route('product', ['id' => $item->id]) }}">{{ $item->name }}</a>
            <!-- Product Price -->
            <p class="sale-price mb-3">
                <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light" alt="">
                <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark" alt="">
                @if ($item->sale_price != 0 && checkSaleFrom($item->date_on_sale_from) && checkSaleTo($item->date_on_sale_to))
                    {{ $item->sale_price }}<span>{{ $item->price }}</span>
                @else
                    {{ $item->price }}
                @endif
            </p>
            <!-- Rating -->
            <div class="product-rating"><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i
                    class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i>
            </div>
            <!-- Add to Cart --><a class="btn btn-primary btn-sm" href="#"><i class="ti ti-plus"></i></a>
        </div>
