@extends('layout.master')

@section('title', 'ورود | ثبت نام')

@section('header')
    @include('home.navbar')
@endsection

@section('content')
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
        <!-- Background Shape-->
        <div class="background-shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 col-lg-8">
                    <img class="big-logo mb-4" src="img/core-img/logo-white.png" alt="">
                    <h5>سلام !</h5>
                    <p class="text-light">شما در حال استفاده از نسخه آزمایشی وبسایت هستید</p>
                    <p class="text-light">لطفا بااستفاده از دکمه زیر وارد شوید</p>
                    <!-- View As Guest-->
                    <div class="view-as-guest mt-3">
                        <a class="btn btn-danger" href="{{ route('auth.login.guest') }}">
                            <i class="ps-2 ti ti-arrow-right"></i>
                            ورود به عنوان مهمان
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
