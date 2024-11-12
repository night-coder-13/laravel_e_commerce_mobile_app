<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Route::get('test', function (){
    return view('test');
});

Route::get('/', [HomeController::class , 'home'])->name('home');
Route::get('/category/{category}', [HomeController::class , 'category'])->name('category');


Route::get('/product/{id}', [ProductController::class, 'singel' ])->name('product');
Route::post('/comment', [ProductController::class, 'addComment' ])->name('comment.add');

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::get('/increment', [CartController::class, 'increment'])->name('cart.increment');
    Route::get('/decrement', [CartController::class, 'decrement'])->name('cart.decrement');
    Route::get('/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/check-coupon', [CartController::class, 'checkCoupon'])->name('cart.checkCoupon');

});


Route::get('/sub-category', function () {
    return view('subCategory');
})->name('subCategory');

Route::get('/wishlist', function () {
    $pageTitle = 'لیست علاقه‌مندی ها';
    return view('wishlist' , compact('pageTitle'));
})->name('wishlist');


Route::get('/checkout', function () {
    $pageTitle = 'صورت حساب';
    return view('checkout' , compact('pageTitle'));
})->name('checkout');

Route::get('/settings', function () {
    $pageTitle = 'تنظیمات';
    return view('settings.setting' , compact('pageTitle'));
})->name('settings');

Route::get('/language', function () {
    $pageTitle = 'تغییر زبان';
    return view('settings.language' , compact('pageTitle'));
})->name('language');

Route::get('/notifications', function () {
    $pageTitle = 'پیام ها';
    return view('notifications' , compact('pageTitle'));
})->name('notifications');

Route::get('/profile', function () {
    $pageTitle = 'پروفایل';
    return view('profile.profile' , compact('pageTitle'));
})->name('profile');
Route::get('/edit-profile', function () {
    $pageTitle = 'ویرایش پروفایل';
    return view('profile.edit' , compact('pageTitle'));
})->name('profile.edit');
