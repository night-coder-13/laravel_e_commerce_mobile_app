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
            <br>
            <div class="card ">
                <div class="card-body p-4">
                    <!-- Single Order Status-->
                    @foreach ($orders as $order)
                        <div class="single-order-status cursor-pointer {{ $order->getRawOriginal('status') ? 'active' : '' }}"
                            data-bs-toggle="collapse" data-bs-target="#details{{ $order->id }}" aria-expanded="false"
                            aria-controls="details{{ $order->id }}">
                            <div class="order-icon">
                                <i class="ti ti-basket"></i>
                            </div>
                            <div class="order-text">
                                <h6>{{ $order->status }}</h6>
                                <span style="direction: rtl;">{{ verta($order->created_at)->format('d F Y') }}</span>
                            </div>
                            <div class="order-status">
                                <i class="ti ti-circle-check"></i>
                            </div>

                        </div>
                        <!-- Dropdown Content -->
                        <div class="collapse" id="details{{ $order->id }}">
                            <div class="order-details">
                                <div class="card-body ">
                                    <ul class="list-group">
                                        @foreach ($order->orderItems as $item)
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="text-start">{{ number_format($item->subtotal) }} تومان</span>
                                                <span class="text-end">{{ $item->product->name }} * {{ $item->quantity }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
