<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $message = 'message';
    return view('home' , compact('message'));
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/sub-category', function () {
    return view('subCategory');
})->name('subCategory');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');
