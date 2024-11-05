@extends('layout.master')

@section('title', 'فروشگاه ژیلا')

@section('header')
    @include('body.navbar')
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
                <div class="user-profile me-3"><img src="img/bg-img/9.jpg" alt="">
                  <div class="change-user-thumb">
                    <form>
                      <input class="form-control-file" type="file">
                      <button><i class="ti ti-pencil"></i></button>
                    </form>
                  </div>
                </div>
                <div class="user-info">
                  <p class="mb-0 text-white">@designing-world</p>
                  <h5 class="mb-0 text-white">Suha Jannat</h5>
                </div>
              </div>
            </div>
            <!-- User Meta Data-->
            <div class="card user-data-card">
              <div class="card-body">
                <form action="" method="">
                  <div class="mb-3">
                    <div class="title mb-2"><i class="ti ti-at"></i><span>نام کاربری</span></div>
                    <input class="form-control" type="text" value="designing-world">
                  </div>
                  <div class="mb-3">
                    <div class="title mb-2"><i class="ti ti-user"></i><span>نام و نام‌خانوادگی</span></div>
                    <input class="form-control" type="text" value="سارا جبلی" disabled>
                  </div>
                  <div class="mb-3">
                    <div class="title mb-2"><i class="ti ti-phone"></i><span>تلفن</span></div>
                    <input class="form-control" type="text" value="+98 000 111 222">
                  </div>
                  <div class="mb-3">
                    <div class="title mb-2"><i class="ti ti-mail"></i><span>ایمیل</span></div>
                    <input class="form-control" type="email" value="sara@example.com">
                  </div>
                  <div class="mb-3">
                    <div class="title mb-2"><i class="ti ti-location"></i><span>آدرس</span></div>
                    <input class="form-control" type="text" value="ایران - اصفهان">
                  </div>
                  <button class="btn btn-primary btn-lg w-100" type="submit">ذخیره</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
