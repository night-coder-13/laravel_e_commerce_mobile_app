<div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
        <!-- Back Button-->
        <div class="back-button me-2"><a href="{{ url()->previous() }}"><i class="ti ti-arrow-left"></i></a></div>
        <!-- Page Title-->
        <div class="page-heading">
            <h6 class="mb-0">Product Catagory</h6>
        </div>
        <!-- Filter Option-->
        <div class="filter-option ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaFilterOffcanvas"
            aria-controls="suhaFilterOffcanvas"><i class="ti ti-adjustments-horizontal"></i></div>
    </div>
</div>

<div class="offcanvas offcanvas-start suha-filter-offcanvas-wrap" tabindex="-1" id="suhaFilterOffcanvas"
    aria-labelledby="suhaFilterOffcanvasLabel">
    <!-- Close button-->
    <button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <!-- Offcanvas body-->
    <div class="offcanvas-body py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Catagory-->
                    <div class="widget catagory mb-4">
                        <h6 class="widget-title mb-2">Brand</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="zara" type="checkbox" checked>
                                <label class="form-check-label" for="zara">Zara</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Gucci" type="checkbox">
                                <label class="form-check-label" for="Gucci">Gucci</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Addidas" type="checkbox">
                                <label class="form-check-label" for="Addidas">Addidas</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Nike" type="checkbox">
                                <label class="form-check-label" for="Nike">Nike</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Denim" type="checkbox">
                                <label class="form-check-label" for="Denim">Denim</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Color-->
                    <div class="widget color mb-4">
                        <h6 class="widget-title mb-2">Color Family</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Purple" type="checkbox" checked>
                                <label class="form-check-label" for="Purple">Purple</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Black" type="checkbox">
                                <label class="form-check-label" for="Black">Black</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="White" type="checkbox">
                                <label class="form-check-label" for="White">White</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Red" type="checkbox">
                                <label class="form-check-label" for="Red">Red</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Pink" type="checkbox">
                                <label class="form-check-label" for="Pink">Pink</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Size-->
                    <div class="widget size mb-4">
                        <h6 class="widget-title mb-2">Size</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="XtraLarge" type="checkbox" checked>
                                <label class="form-check-label" for="XtraLarge">Xtra Large</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Large" type="checkbox">
                                <label class="form-check-label" for="Large">Large</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="medium" type="checkbox">
                                <label class="form-check-label" for="medium">Medium</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="Small" type="checkbox">
                                <label class="form-check-label" for="Small">Small</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="ExtraSmall" type="checkbox">
                                <label class="form-check-label" for="ExtraSmall">Extra Small</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Ratings-->
                    <div class="widget ratings mb-4">
                        <h6 class="widget-title mb-2">Ratings</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="5star" type="checkbox" checked>
                                <label class="form-check-label" for="5star"><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i></label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="4star" type="checkbox">
                                <label class="form-check-label" for="4star"><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-secondary"></i></label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="3star" type="checkbox">
                                <label class="form-check-label" for="3star"><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-secondary"></i><i
                                        class="ti ti-star-filled text-secondary"></i></label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="2star" type="checkbox">
                                <label class="form-check-label" for="2star"><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-secondary"></i><i
                                        class="ti ti-star-filled text-secondary"></i><i
                                        class="ti ti-star-filled text-secondary"></i></label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="1star" type="checkbox">
                                <label class="form-check-label" for="1star"><i
                                        class="ti ti-star-filled text-warning"></i><i
                                        class="ti ti-star-filled text-secondary"></i><i
                                        class="ti ti-star-filled text-secondary"></i><i
                                        class="ti ti-star-filled text-secondary"></i><i
                                        class="ti ti-star-filled text-secondary"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Payment Type-->
                    <div class="widget payment-type mb-4">
                        <h6 class="widget-title mb-2">Payment Type</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="cod" type="checkbox" checked>
                                <label class="form-check-label" for="cod">Cash On Delivery</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="paypal" type="checkbox">
                                <label class="form-check-label" for="paypal">Paypal</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="checkpayment" type="checkbox">
                                <label class="form-check-label" for="checkpayment">Check Payment</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="payonner" type="checkbox">
                                <label class="form-check-label" for="payonner">Payonner</label>
                            </div>
                            <!-- Single Checkbox-->
                            <div class="form-check">
                                <input class="form-check-input" id="mobbanking" type="checkbox">
                                <label class="form-check-label" for="mobbanking">Mobile Banking</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Price Range-->
                    <div class="widget price-range mb-4">
                        <h6 class="widget-title mb-2">Price Range</h6>
                        <div class="widget-desc">
                            <!-- Min Value-->
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="floatingInput" type="text"
                                            placeholder="1" value="1">
                                        <label for="floatingInput">Min</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="floatingInput" type="text"
                                            placeholder="1" value="5000">
                                        <label for="floatingInput">Max</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Apply Filter-->
                    <div class="apply-filter-btn"><a class="btn btn-lg btn-success w-100" href="#">Apply
                            Filter</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
