@extends('layout.master')

@section('title', 'ژیلا | صندوق پیام')

@section('header')
    @include('body.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        <div class="container">
          <!-- Section Heading-->
          <div class="section-heading d-flex align-items-center pt-3 justify-content-between rtl-flex-d-row-r">
            <h6>دریافت شده</h6><a class="notification-clear-all text-secondary" href="#">حذف همه</a>
          </div>
          <!-- Notifications Area-->
          <div class="notification-area pb-2">
            <div class="list-group">
              <!-- Single Notification--><a class="list-group-item d-flex align-items-center border-0" href="notification-details.html"><span class="noti-icon"><i class="ti ti-bell-ringing"></i></span>
                <div class="noti-info">
                  <h6 class="mb-1">محمد یک محصول منتشر کرد !</h6><span>12 دقیقه پیش</span>
                </div></a>
              <!-- Single Notification--><a class="list-group-item d-flex align-items-center border-0" href="notification-details.html"><span class="noti-icon"><i class="ti ti-gift"></i></span>
                <div class="noti-info">
                  <h6 class="mb-1">احمد یک کد تخفیف ایجاد کرد</h6><span>49 دقیقه پیش</span>
                </div></a>
              <!-- Single Notification--><a class="list-group-item d-flex align-items-center border-0" href="notification-details.html"><span class="noti-icon"><i class="ti ti-message-circle"></i></span>
                <div class="noti-info">
                  <h6 class="mb-1">منیژه با شما یک گفتگو ایجاد کرد !!</h6><span>58 دقیقه پیش</span>
                </div></a>
              <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center border-0" href="notification-details.html"><span class="noti-icon"><i class="ti ti-ship"></i></span>
                <div class="noti-info">
                  <h6 class="mb-1">سفارش DX-4578 به دست مشتری رسید.</h6><span>دیروز</span>
                </div></a>
              <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center border-0" href="notification-details.html"><span class="noti-icon"><i class="ti ti-heart"></i></span>
                <div class="noti-info">
                  <h6 class="mb-1">لیست علاقه‌مندی ها خالی شد.</h6><span>2 روز پیش</span>
                </div></a>
              
            </div>
          </div>
        </div>
      </div>
@endsection
