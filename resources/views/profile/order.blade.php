@extends('layout.master')

@section('title', 'فروشگاه ژیلا')

@section('header')
    @include('home.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        <div class="container">
            <div class="card ">
                <div class="card-body p-4">
                    <!-- Single Order Status-->
                    <div class="single-order-status active" data-bs-toggle="collapse" data-bs-target="#details1"
                        aria-expanded="false" aria-controls="details1">
                        <div class="order-icon">
                            <i class="ti ti-basket"></i>
                        </div>
                        <div class="order-text">
                            <h6>سفارش</h6>
                            <span>2 Feb 2024 - 12:38 PM</span>
                        </div>
                        <div class="order-status">
                            <i class="ti ti-circle-check"></i>
                        </div>

                    </div>
                    <!-- Dropdown Content -->
                    <div class="collapse" id="details1">
                        <div class="order-details">
                            <p>جزئیات بیشتر.</p>
                        </div>
                    </div>

                    <!-- Single Order Status-->
                    <div class="single-order-status active" data-bs-toggle="collapse" data-bs-target="#details2"
                        aria-expanded="false" aria-controls="details2">
                        <div class="order-icon">
                            <i class="ti ti-basket"></i>
                        </div>
                        <div class="order-text">
                            <h6>Order placed</h6><span>2 Feb 2024 - 12:38 PM</span>
                        </div>
                        <div class="order-status">
                            <i class="ti ti-circle-check"></i>
                        </div>

                    </div>
                    <!-- Dropdown Content -->
                    <div class="collapse" id="details2">
                        <div class="order-details">
                            <p>Additional details about order placed.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
