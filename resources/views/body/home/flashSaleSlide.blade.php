<div class="flash-sale-wrapper">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
            <h6 class="d-flex align-items-center rtl-flex-d-row-r"><i
                    class="ti ti-bolt-lightning me-1 text-danger lni-flashing-effect"></i>فروش ویژه</h6>
            <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss -->
            <ul class="sales-end-timer ps-0 d-flex align-items-center rtl-flex-d-row-r"
                data-countdown="2024/12/31 14:21:59">
                <li><span class="days">0</span>روز</li>
                <li><span class="hours">0</span>ساعت</li>
                <li><span class="minutes">0</span>دقیقه</li>
            </ul>
        </div>
        <!-- Flash Sale Slide-->
        <div class="flash-sale-slide owl-carousel">
            <!-- Flash Sale Card -->
            @foreach ($offer as $item)
                <div class="card flash-sale-card">
                    <div class="card-body">
                        <!-- Badge--><span class="badge rounded-pill badge-warning">ویژه</span>
                        <a href="single-product.html"><img src="{{ ImageUrl('products/' . $item->primary_image) }}"
                                alt=""><span class="product-title">{{ $item->name }}</span>
                            <p class="sale-price d-flex">
                                <img src="{{ asset('img/toman_d.svg') }}" width="16px" class="light" alt="">
                                <img src="{{ asset('img/toman_l.svg') }}" width="16px" class="dark" alt="">
                                @if ($item->sale_price != 0 && checkSaleFrom($item->date_on_sale_from) && checkSaleTo($item->date_on_sale_to))
                                    {{ $item->sale_price }}<span class="real-price">{{ $item->price }}</span>
                                @else
                                    {{ $item->price }}
                                @endif
                            </p>
                            <span class="progress-title">{{ salePercent($item->price, $item->sale_price) }}%
                                تخفیف
                            </span>
                            <!-- Progress Bar-->
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ salePercent($item->price, $item->sale_price) }}%"
                                    aria-valuenow="{{ salePercent($item->price, $item->sale_price) }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
