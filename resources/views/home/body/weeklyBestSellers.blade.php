<div class="weekly-best-seller-area py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>پرفروش های هفته</h6><a class="btn btn-sm btn-light" href="shop-list.html">
                مشاهده همه<i class="ms-1 ti ti-arrow-right"></i></a>
        </div>
        <div class="row g-2">
            <!-- Weekly Product Card -->
            @foreach ($popularityProducts as $item)
                <div class="col-12">
                    <div class="card horizontal-product-card">
                        <div class="d-flex align-items-center">
                            <div class="product-thumbnail-side">
                                <!-- Thumbnail -->
                                <a class="product-thumbnail d-block" href="{{ route('product', ['id' => $item->id]) }}">
                                    <img src="{{ ImageUrl('products/' . $item->primary_image) }}" alt="">
                                </a>
                                <!-- Wishlist  -->
                                <a class="wishlist-btn" href="{{ route('wishlist.add', ['id' => $item->id]) }}">
                                    <i class="ti ti-heart"></i>
                                </a>
                            </div>
                            <div class="product-description">
                                <!-- Product Title --><a class="product-title d-block"
                                    href="{{ route('product', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                <!-- Price -->
                                <p class="sale-price">
                                    <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light"
                                        alt="">
                                    <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark"
                                        alt="">
                                    @if ($item->sale_price != 0 && checkSaleFrom($item->date_on_sale_from) && checkSaleTo($item->date_on_sale_to))
                                        {{ $item->sale_price }}<span>{{ $item->price }}</span>
                                    @else
                                        {{ $item->price }}
                                    @endif

                                </p>
                                <!-- Rating -->
                                <div class="product-rating"><i
                                        class="ti ti-star-filled"></i>{{ $item->popularity_score }} <span
                                        class="ms-1">({{ $item->sales_count }} فروش)</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
