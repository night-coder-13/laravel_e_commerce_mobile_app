<!-- Internet Connection Status-->
<div class="internet-connection-status" id="internetStatus"></div>
<!-- Footer Nav-->
<div class="footer-nav-area" id="footerNav">
  <div class="suha-footer-nav">
    <ul class="h-100 d-flex align-items-center justify-content-between ps-0 d-flex rtl-flex-d-row-r">
      <li><a href="{{ route('home') }}"><i class="ti ti-home"></i>خانه</a></li>
      <li><a href="{{ route('chat') }}"><i class="ti ti-message"></i>گفتگو</a></li>
      <li><a href="{{ route('cart.index') }}"><i class="ti ti-basket"></i>سبد خرید</a></li>
      <li><a href="{{ route('settings') }}"><i class="ti ti-settings"></i>تنظیمات</a></li>
      <li><a href="{{ route('wishlist') }}"><i class="ti ti-heart"></i>علاقه‌مندی ها</a></li>
    </ul>
  </div>
</div>
<!-- All JavaScript Files-->
<script src="{{ secure_asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.min.js') }}"></script>
@yield('script')
<script src="{{ secure_asset('js/waypoints.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ secure_asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ secure_asset('js/jquery.passwordstrength.js') }}"></script>
<script src="{{ secure_asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ secure_asset('js/theme-switching.js') }}"></script>
<script src="{{ secure_asset('js/no-internet.js') }}"></script>
<script src="{{ secure_asset('js/active.js') }}"></script>
</body>
</html>