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
            <!-- Profile Wrapper-->
            <div class="profile-wrapper-area py-3">
                <!-- User Information-->
                <div class="card user-info-card">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="user-profile me-3"><img src="{{ imageUrl('avatars/'.$user->avatar) }}" alt=""></div>
                        <div class="user-info">
                            <p class="mb-0 text-white">{{ $user->email }}</p>
                            <h5 class="mb-0 text-white">{{ $user->name }}</h5>
                        </div>
                    </div>
                </div>
                <!-- User Meta Data-->
                <div class="card user-data-card">
                    <div class="card-body">
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-at"></i><span>نام کاربری</span>
                            </div>
                            <div class="data-content">{{ $user->email }}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-user"></i>
                                <span>نام و نام‌خانوادگی</span>
                            </div>
                            <div class="data-content">{{ $user->name }}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-phone"></i><span>تلفن</span></div>
                            <div class="data-content">{{ $user->phone }}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-mail"></i><span>ایمیل</span></div>
                            <div class="data-content">{{ $user->email }}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i
                                    class="ti ti-location-pin"></i><span>آدرس:</span></div>
                            <div class="data-content">{{ $user->address }}</div>
                        </div>
                        <div class="single-profile-data d-flex align-items-center justify-content-between">
                            <div class="title d-flex align-items-center"><i class="ti ti-star-filled"></i><span>
                                    سفارشات</span></div>
                            <div class="data-content"><a class="btn btn-primary btn-sm" href="{{ route('profile.order') }}">مشاهده</a>
                            </div>
                        </div>
                        <!-- Edit Profile-->
                        <div class="edit-profile-btn mt-3">
                            <a class="btn btn-primary btn-lg w-100" href="{{ route('profile.edit') }}">
                                <i class="ti ti-pencil me-2"></i>ویرایش پروفایل
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
