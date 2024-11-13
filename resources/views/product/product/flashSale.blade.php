<div class="flash-sale-panel bg-white mb-3 py-3">
    <div class="container">
        <!-- Sales Offer Content-->
        <div class="sales-offer-content d-flex align-items-end justify-content-between">
            <!-- Sales End-->
            <div class="sales-end">
                <p class="mb-1 font-weight-bold"><i
                        class="ti ti-bolt-lightning lni-flashing-effect text-danger"></i> اتمام فروش ویژه</p>
                <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss-->
                <ul class="sales-end-timer ps-0 d-flex align-items-center" data-countdown="2025/01/01 14:21:37">
                    <li><span class="days">0</span>روز</li>
                    <li><span class="hours">0</span>ساعت</li>
                    <li><span class="minutes">0</span>دقیقه</li>
                </ul>
            </div>
            <!-- Sales Volume-->
            <div class="sales-volume text-start">
                <p class="mb-1 font-weight-bold">{{ salePercent($product->price, $product->sale_price) }}% تخفیف</p>
                <div class="progress" style="height: 0.375rem;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ salePercent($product->price, $product->sale_price) }}%;"
                        aria-valuenow="{{ salePercent($product->price, $product->sale_price) }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>