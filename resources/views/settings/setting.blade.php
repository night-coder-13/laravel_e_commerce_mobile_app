@extends('layout.master')

@section('title', 'دسته بندی محصولات')

@section('header')
    @include('home.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        <div class="container">
          <div class="settings-wrapper py-3">
            <!-- Single Setting Card-->
            <div class="card settings-card">
              <div class="card-body">
                <!-- Single Settings-->
                <div class="single-settings d-flex align-items-center justify-content-between">
                  <div class="title"><i class="ti ti-moon"></i><span>حالت شب</span></div>
                  <div class="data-content">
                    <div class="toggle-button-cover">
                      <div class="button r">
                        <input class="checkbox" id="darkSwitch" type="checkbox">
                        <div class="knobs"></div>
                        <div class="layer"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Setting Card-->
            <div class="card settings-card">
              <div class="card-body">
                <!-- Single Settings-->
                <div class="single-settings d-flex align-items-center justify-content-between">
                  <div class="title"><i class="ti ti-pilcrow"></i><span>RTL حالت</span></div>
                  <div class="data-content">
                    <div class="toggle-button-cover">
                      <div class="button r">
                        <input class="checkbox" id="rtlSwitch" type="checkbox">
                        <div class="knobs"></div>
                        <div class="layer"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Setting Card-->
            <div class="card settings-card">
              <div class="card-body">
                <!-- Single Settings-->
                <div class="single-settings d-flex align-items-center justify-content-between">
                  <div class="title"><i class="ti ti-circle-check"></i><span>در دسترس بودن</span></div>
                  <div class="data-content">
                    <div class="toggle-button-cover">
                      <div class="button r">
                        <input class="checkbox" type="checkbox" checked>
                        <div class="knobs"></div>
                        <div class="layer"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Single Setting Card-->
            <div class="card settings-card">
              <div class="card-body">
                <!-- Single Settings-->
                <div class="single-settings d-flex align-items-center justify-content-between">
                  <div class="title"><i class="ti ti-language"></i><span>زبان</span></div>
                  <div class="data-content"><a href="{{ route('language') }}">فارسی<i class="ti ti-arrow-right"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Single Setting Card-->
            <div class="card settings-card">
              <div class="card-body">
                <!-- Single Settings-->
                <div class="single-settings d-flex align-items-center justify-content-between">
                  <div class="title"><i class="ti ti-question-mark"></i><span>پشتیبانی</span></div>
                  <div class="data-content"><a href="#">ایجاد تیکت<i class="ti ti-arrow-right"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Single Setting Card-->
            <div class="card settings-card">
              <div class="card-body">
                <!-- Single Settings-->
                <div class="single-settings d-flex align-items-center justify-content-between">
                  <div class="title"><i class="ti ti-shield-lock"></i><span>سیاست حفظ حریم خصوصی</span></div>
                  <div class="data-content"><a href="#">مشاهده<i class="ti ti-arrow-right"></i></a></div>
                </div>
              </div>
            </div>
            <!-- Single Setting Card-->
            <div class="card settings-card">
              <div class="card-body">
                <!-- Single Settings-->
                <div class="single-settings d-flex align-items-center justify-content-between">
                  <div class="title"><i class="ti ti-key"></i><span>گذرواژه</span></div>
                  <div class="data-content"><a href="#">تغییر<i class="ti ti-arrow-right"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
