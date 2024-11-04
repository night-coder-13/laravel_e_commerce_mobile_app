<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $message = 'message';
    return view('home' , compact('message'));
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');
