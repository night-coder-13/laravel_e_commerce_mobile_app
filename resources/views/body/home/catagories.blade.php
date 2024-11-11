<div class="product-catagories-wrapper py-3">
    <div class="container">
        <div class="row g-2 rtl-flex-d-row-r">
            <!-- Catagory Card -->
            @foreach ($categories as $item)
                <x-category :item="$item" />
            @endforeach
            <!-- Catagory Card -->
            <div class="col-3">
                <div class="card catagory-card active">
                    <div class="card-body px-2"><a href="catagory.html"><img src="img/core-img/price-tag.png"
                                alt=""><span>فروش ویژه</span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
