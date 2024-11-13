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
                        <x-product :item="$item" />
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
