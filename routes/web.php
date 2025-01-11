<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return view('test');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category');
Route::get('/collection/{collection}', [HomeController::class, 'collection'])->name('collection');

Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.login.form');
Route::get('/forget-password', [AuthController::class, 'forgetPassword'])->name('auth.forgetPassword');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/login-guest', [AuthController::class, 'loginGuest'])->name('auth.login.guest');


Route::get('/product/{id}', [ProductController::class, 'singel'])->name('product');
Route::post('/comment', [ProductController::class, 'addComment'])->name('comment.add');

Route::middleware('auth')->group(function () {
    Route::prefix('profile')->group(function (){
        Route::get('/', [ProfileController::class , 'index'])->name('profile');
        Route::get('/edit', [ProfileController::class , 'edit'])->name('profile.edit');
        Route::put('/update', [ProfileController::class , 'update'])->name('profile.update');
        Route::get('/orders', [ProfileController::class , 'order'])->name('profile.order');
    });

    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('cart.index');
        Route::get('/increment', [CartController::class, 'increment'])->name('cart.increment');
        Route::get('/increment/cart', [CartController::class, 'incrementCart'])->name('cart.increment.cart');
        Route::get('/decrement/cart', [CartController::class, 'decrementCart'])->name('cart.decrement.cart');
        Route::get('/add', [CartController::class, 'add'])->name('cart.add');
        Route::get('/remove', [CartController::class, 'remove'])->name('cart.remove');
        Route::get('/clear', [CartController::class, 'clear'])->name('cart.clear');
        Route::get('/check-coupon', [CartController::class, 'checkCoupon'])->name('cart.checkCoupon');
        Route::get('/remove-coupon', [CartController::class, 'removeCoupon'])->name('cart.removeCoupon');

        Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    });

    Route::prefix('wishlist')->group(function () {
        Route::get('/', [WishlistController::class, 'index'])->name('wishlist');
        Route::get('/add', [WishlistController::class, 'add'])->name('wishlist.add');
        Route::get('/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');
        Route::get('/clear', [WishlistController::class, 'clear'])->name('wishlist.clear');
        Route::get('/add-to-cart', [WishlistController::class, 'addcart'])->name('wishlist.addcart');
    });

    Route::prefix('payment')->group(function () {
        Route::get('/send', [PaymentController::class, 'send'])->name('payment.send');
        Route::get('/verify', [PaymentController::class, 'verify'])->name('payment.verify');
        Route::get('/status', [PaymentController::class, 'status'])->name('payment.status');
    });
});

Route::get('/chat', function () {
    $pageTitle = 'گفتگو با پشتیبانی';
    return view('chat.index', compact('pageTitle'));
})->name('chat');

Route::get('/sub-category', function () {
    return view('subCategory');
})->name('subCategory');


Route::get('/settings', function () {
    $pageTitle = 'تنظیمات';
    return view('settings.setting', compact('pageTitle'));
})->name('settings');

Route::get('/language', function () {
    $pageTitle = 'تغییر زبان';
    return view('settings.language', compact('pageTitle'));
})->name('language');

Route::get('/notifications', function () {
    $pageTitle = 'پیام ها';
    return view('notifications', compact('pageTitle'));
})->name('notifications');