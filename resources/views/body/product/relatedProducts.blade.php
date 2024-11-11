<div class="related-product-wrapper bg-white py-3 mb-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
            <h6>محصولات مشابه</h6><a class="btn btn-sm btn-secondary" href="shop-grid.html">مشاهده همه</a>
        </div>
        <div class="related-product-slide owl-carousel">
            @foreach ($SimilarProducts as $item)
                <div class="card product-card bg-gray shadow-none">
                    <x-product :item="$item" />
                </div>
            @endforeach
        </div>
    </div>
</div>
