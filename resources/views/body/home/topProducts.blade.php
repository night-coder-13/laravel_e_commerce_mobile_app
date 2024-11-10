<div class="top-products-area py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>بهترین محصولات</h6><a class="btn btn-sm btn-light" href="shop-grid.html">مشاهده همه<i
                    class="ms-1 ti ti-arrow-right"></i></a>
        </div>
        <div class="row g-2">
            <!-- Product Card -->
            @foreach ($salesProducts as $item)
                <div class="col-6 col-md-4">
                    <div class="card product-card">
                        <div class="card-body">
                            @if ($item->sale_price != 0 && checkSaleFrom($item->date_on_sale_from) && checkSaleTo($item->date_on_sale_to))
                                <span class="badge rounded-pill badge-warning">ویژه</span>
                            @endif
                            <!-- Wishlist Button--><a class="wishlist-btn" href="#"><i class="ti ti-heart">
                                </i></a>
                            <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img
                                    class="mb-2" src="{{ ImageUrl('products/' . $item->primary_image) }}"
                                    alt="">
                            </a>
                            <!-- Product Title --><a class="product-title"
                                href="single-product.html">{{ $item->name }}</a>
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
                            <div class="product-rating"><i class="ti ti-star-filled"></i><i
                                    class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i><i
                                    class="ti ti-star-filled"></i><i class="ti ti-star-filled"></i></div>
                            <!-- Add to Cart --><a class="btn btn-primary btn-sm" href="#"><i
                                    class="ti ti-plus"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
