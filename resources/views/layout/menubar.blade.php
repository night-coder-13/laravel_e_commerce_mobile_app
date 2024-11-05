<div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
    aria-labelledby="suhaOffcanvasLabel">
    <!-- Close button-->
    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <!-- Offcanvas body-->
    <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
            <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
            <div class="user-info">
                <h5 class="user-name mb-1 text-white">سارا جبلی</h5>
                <p class="available-balance text-white">موجودی حساب ت<span class="">25،000</span></p>
            </div>
        </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
            <li><a href="profile.html"><i class="ti ti-user"></i>پروفایل</a></li>
            <li><a href="notifications.html"><i class="ti ti-bell-ringing lni-tada-effect"></i>پیام ها<span
                        class="ms-1 badge badge-warning">3</span></a></li>
            <li class="suha-dropdown-menu"><a href="#"><i class="ti ti-building-store"></i>فروشگاه</a>
                <ul>
                    <li><a href="{{ route('home') }}">خانه</a></li>
                    <li><a href="{{ route('category') }}">منو محصولات</a></li>
                    <li><a href="{{ route('product') }}">صفحه تک محصول</a></li>
                    <li><a href="featured-products.html">موردعلاقه ها</a></li>
                </ul>
            </li>
            <li><a href="profile.html"><i class="ti ti-heart"></i>موردعلاقه ها</a></li>
            <li><a href="settings.html"><i class="ti ti-adjustments-horizontal"></i>تنظیمات سایت</a></li>
            <li><a href="intro.html"><i class="ti ti-logout"></i>خروج</a></li>
        </ul>
    </div>
</div>