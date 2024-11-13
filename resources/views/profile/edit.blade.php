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
                <div class="user-profile me-3"><img src="{{ imageUrl('avatars/'.$user->avatar) }}" alt="">
                  <div class="change-user-thumb">
                    <form>
                      <input class="form-control-file" type="file" name="image">
                      <button><i class="ti ti-pencil"></i></button>
                    </form>
                  </div>
                </div>
                <div class="user-info">
                  <p class="mb-0 text-white">{{ $user->email }}</p>
                  <h5 class="mb-0 text-white">{{ $user->name }}</h5>
                </div>
              </div>
            </div>
            <!-- User Meta Data-->
            <div class="card user-data-card">
              <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                    <div class="title mb-2"><i class="ti ti-user"></i><span>نام و نام‌خانوادگی</span></div>
                    <input class="form-control" name="name" type="text" value="{{ $user->name }}">
                    @error('name')
                      <p class="text-danger">
                        {{ $message }}
                      </p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <div class="title mb-2"><i class="ti ti-phone"></i><span>تلفن</span></div>
                    <input class="form-control" name="phone" type="text" value="{{ $user->phone }}">
                    @error('phone')
                      <p class="text-danger">
                        {{ $message }}
                      </p>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <div class="title mb-2"><i class="ti ti-location"></i><span>آدرس</span></div>
                    <input class="form-control" name="address" type="text" value="{{ $user->address }}">
                    @error('address')
                      <p class="text-danger">
                        {{ $message }}
                      </p>
                    @enderror
                  </div>
                  <button class="btn btn-primary btn-lg w-100" type="submit">ذخیره</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
