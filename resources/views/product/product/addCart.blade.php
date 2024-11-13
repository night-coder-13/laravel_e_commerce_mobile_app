<div class="cart-form-wrapper bg-white mb-3 py-3">
    <div class="container">
        <form class="cart-form" action="{{ route('cart.add') }}" method="get">

            <div class="order-plus-minus d-flex align-items-center">
                <div class="quantity-button-handler">-</div>
                <input class="form-control cart-quantity-input" type="text" step="1" name="qty"
                    value="{{ isset($cartItem['qty']) ? $cartItem['qty'] : 1 }}">
                <div class="quantity-button-handler">+</div>
            </div>

            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="size" id="size--product">
            <input type="hidden" name="color" id="color--product">
            @if ($cartItem)
                <button class="btn btn-info ms-3" type="submit">اعمال تغییرات</button>
            @else
                <button class="btn btn-primary ms-3" type="submit">افزودن به سبد خرید</button>
            @endif
            <div class="text-danger">
                @error('qty')
                    {{ $message }}
                @enderror
                @error('product_id')
                    {{ $message }}
                @enderror
            </div>
        </form>
    </div>
</div>
