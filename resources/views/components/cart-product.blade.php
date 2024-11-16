<div class="col-12">
    <div class="card horizontal-product-card">
        <div class="d-flex align-items-center">
            <div class="product-thumbnail-side">
                <!-- Thumbnail -->
                <a class="product-thumbnail d-block" href="single-product.html">
                    <img src="{{ ImageUrl('products/' . $item['primary_image']) }}" alt="">
                </a>
                <!-- Delete  --><a class="delete-btn" href="{{ route('cart.remove', ['product_id' => $key]) }}"><i
                        class="ti ti-trash"></i></a>
            </div>
            <div class="product-description">
                <!-- Product Title -->
                <a class="product-title d-block" href="{{ route('product',['id'=>$key]) }}">
                    {{ $item['name'] }}
                </a>
                <!-- Price -->
                <p class="sale-price d-flex">
                    <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light" alt="">
                    <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark" alt="">
                    @if ($item['sale_price'] != 0 && checkSaleFrom($item['date_on_sale_from']) && checkSaleTo($item['date_on_sale_to']))
                        {{ $item['sale_price'] }}<span class="real-price">{{ $item['price'] }}</span>
                    @else
                        {{ $item['price'] }}
                    @endif
                </p>
                <!-- qty -->
                <div class="cart-form float-end mt-1">
                    <div class="order-plus-minus d-flex align-items-center">
                        <a href="{{ route('cart.decrement.cart' , ['product_id'=>$key ]) }}" class="quantity-button-handler">-</a>
                        <input class="form-control cart-quantity-input" type="text" step="1" name="qty"
                            value="{{ $item['qty'] }}">
                        <a href="{{ route('cart.increment.cart' , ['product_id'=>$key]) }}" class="quantity-button-handler">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
