@include('layout.head')

@yield('header')

@yield('content')

@if (session('success'))
    <div class="toast pwa-install-alert bg-success shadow" role="alert" aria-live="assertive" aria-atomic="true"
        data-bs-delay="50000" data-bs-autohide="true">
        <div class="toast-body">
            <div class="content d-flex align-items-center mb-2">
                <span class="mb-0 d-block col-11 text-white">{{ session('success') }}</span>
                <button class="btn-close ms-auto col-1" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>

        </div>
    </div>
@endif
@if (session('error'))
    <div class="toast pwa-install-alert bg-danger shadow" role="alert" aria-live="assertive" aria-atomic="true"
        data-bs-delay="5000" data-bs-autohide="true">
        <div class="toast-body">
            <div class="content d-flex align-items-center mb-2">
                <span class="mb-0 d-block col-11 text-white">{{ session('error') }}</span>
                <button class="btn-close ms-auto col-1" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>

        </div>
    </div>
@endif

@include('layout.footer')
