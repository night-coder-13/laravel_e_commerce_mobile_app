<!-- Header Area -->
<div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between d-flex rtl-flex-d-row-r">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper"><a href="home.html"><img src="img/core-img/logo-small.png" alt=""></a></div>
        <div class="navbar-logo-container d-flex align-items-center">
            @if (auth()->check())
                <!-- Cart Icon -->
                <div class="cart-icon-wrap">
                    <a href="{{ route('cart.index') }}">
                        <i class="ti ti-basket-bolt"></i>
                        <span>{{ count(session('cart', [])) }}</span>
                    </a>
                </div>
                <!-- User Profile Icon -->
                <div class="user-profile-icon ms-2">
                    <a href="{{ route('profile') }}"><img src="{{ imageUrl('avatars/' . auth()->user()->avatar) }}"
                            alt=""></a>
                </div>
            @else
                <div class="cart-icon-wrap">
                    <a href="{{ route('auth.login.form') }}">
                        <i class="ti ti-login"></i>
                    </a>
                </div>
            @endif
            <!-- Navbar Toggler -->
            <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas">
                <div><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>
</div>
@include('layout.menubar')
