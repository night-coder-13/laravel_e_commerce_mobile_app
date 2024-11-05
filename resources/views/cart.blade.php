@extends('layout.master')

@section('title', 'دسته بندی محصولات')

@section('header')
    @include('body.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        <div class="container">
            <!-- Cart Wrapper-->
            <div class="cart-wrapper-area py-3">
                <div class="cart-table card mb-3">
                    <div class="table-responsive card-body">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row"><a class="remove-product" href="#"><i class="ti ti-x"></i></a>
                                    </th>
                                    <td><img class="rounded" src="img/product/11.png" alt=""></td>
                                    <td><a class="product-title" href="single-product.html">Ciramic Pot Set<span
                                                class="mt-1">$12.10 × 1</span></a></td>
                                    <td>
                                        <div class="quantity">
                                            <input class="qty-text" type="number" min="1" max="99"
                                                value="1">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><a class="remove-product" href="#"><i class="ti ti-x"></i></a>
                                    </th>
                                    <td><img class="rounded" src="img/product/14.png" alt=""></td>
                                    <td><a class="product-title" href="single-product.html">Bluetooth Speaker<span
                                                class="mt-1">$9.87 × 2</span></a></td>
                                    <td>
                                        <div class="quantity">
                                            <input class="qty-text" type="number" min="1" max="99"
                                                value="2">
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Coupon Area-->
                <div class="card coupon-card mb-3">
                    <div class="card-body">
                        <div class="apply-coupon">
                            <h6 class="mb-0">کد تخفیف دارید؟</h6>
                            <p class="mb-2">کد تخفیف خودرا وارد کنید!</p>
                            <div class="coupon-form">
                                <form action="#">
                                    <input class="form-control" type="text" placeholder="SUHA30">
                                    <button class="btn btn-primary" type="submit">ثبت</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart Amount Area-->
                <div class="card cart-amount-area">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <h5 class="total-price mb-0"> <span class="">ریال</span> <span class="counter">{{ number_format('140000') }}</span></h5><a class="btn btn-primary"
                            href="checkout.html">صورت حساب</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
