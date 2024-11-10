<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class , 'home'])->name('home');

Route::get('/product', function () {
    $pageTitle = 'جزئیات محصول';
    return view('product' , compact('pageTitle'));
})->name('product');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/sub-category', function () {
    return view('subCategory');
})->name('subCategory');

Route::get('/wishlist', function () {
    $pageTitle = 'لیست علاقه‌مندی ها';
    return view('wishlist' , compact('pageTitle'));
})->name('wishlist');

Route::get('/cart', function () {
    $pageTitle = 'سبد خرید';
    return view('cart' , compact('pageTitle'));
})->name('cart');

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
