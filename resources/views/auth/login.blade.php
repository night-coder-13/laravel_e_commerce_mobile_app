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
                <div class="col-10 col-lg-8"><img class="big-logo" src="img/core-img/logo-white.png" alt="">
                    <!-- Register Form-->
                    <div class="register-form mt-5">
                        <form action="{{ route('auth.login') }}" method="POST">
                            @csrf
                            <div class="form-group text-start mb-4"><span>نام کاربری</span>
                                <label for="username"><i class="ti ti-user"></i></label>
                                <input class="form-control" name="email" id="username" type="email" value="{{ old('email') }}" placeholder="info@example.com">
                                @error('email')
                                    <p class="text-warning float-end">
                                        {{ $message }}
                                    </p><br>
                                @enderror
                            </div>
                            <div class="form-group text-start mb-4"><span>گذرواژه</span>
                                <label for="password"><i class="ti ti-key"></i></label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="123...">
                                @error('password')
                                    <p class="text-warning float-end">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <button class="btn btn-warning btn-lg w-100" type="submit">ورود</button>
                        </form>
                    </div>
                    <!-- Login Meta-->
                    <div class="login-meta-data">
                        <a class="forgot-password d-block mt-3 mb-1" href="{{ route('auth.forgetPassword') }}">
                            !گذرواژه خود را فراموش کرده‌ام</a>
                        <p class="mb-0">حساب کاربری ندارید؟ <a class="mx-1" href="{{ route('auth.register') }}">ثبت نام</a></p>
                    </div>
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
