<div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
    aria-labelledby="suhaOffcanvasLabel">
    <!-- Close button-->
    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <!-- Offcanvas body-->
    <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        @if (auth()->check())
            <div class="sidenav-profile">
                <div class="user-profile"><a href="{{ route('profile') }}"><img
                            src="{{ imageUrl('avatars/' . auth()->user()->avatar) }}" alt=""></a></div>
                <div class="user-info">
                    <h5 class="user-name mb-1 text-white">{{ auth()->user()->name }}</h5>
                    <p class="available-balance text-white">موجودی حساب ت<span class="">25،000</span></p>
                </div>
            </div>
        @endif
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
            @if (!auth()->check())
                <li><a href="{{ route('auth.login.form') }}"><i class="ti ti-login"></i>ورود به حساب</a></li>
            @else
                <li><a href="{{ route('profile') }}"><i class="ti ti-user"></i>پروفایل</a></li>
                <li><a href="{{ route('notifications') }}"><i class="ti ti-bell-ringing lni-tada-effect"></i>پیام
                        ها<span class="ms-1 badge badge-warning">3</span></a></li>
                <li class="suha-dropdown-menu"><a href="#"><i class="ti ti-building-store"></i>فروشگاه</a>
                    <ul>
                        <li><a href="{{ route('home') }}">خانه</a></li>
                        <li><a href="">منو محصولات</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('wishlist') }}"><i class="ti ti-heart"></i>موردعلاقه ها</a></li>
                <li><a href="{{ route('settings') }}"><i class="ti ti-adjustments-horizontal"></i>تنظیمات سایت</a></li>
                <li><a href="{{ route('auth.logout') }}"><i class="ti ti-logout"></i>خروج</a></li>
            @endif

        </ul>
    </div>
</div>
