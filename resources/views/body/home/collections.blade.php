<div class="pb-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>کالکشن ها</h6><a class="btn btn-sm btn-light" href="#">
                منو محصولات<i class="ms-1 ti ti-arrow-right"></i></a>
        </div>
        <!-- Collection Slide-->
        <div class="collection-slide owl-carousel">
            <!-- Collection Card-->
            {{-- {{ dd($collections) }} --}}
            @foreach ($collections as $item)
                <div class="card collection-card"><a href="single-product.html">
                        <img src="{{ ImageUrl('collections/' . $item->primary_image) }}" alt=""></a>
                    <div class="collection-title"><span>{{ $item->name }}</span><span class="badge bg-danger">9</span></div>
                </div>
            @endforeach

        </div>
    </div>
</div>
