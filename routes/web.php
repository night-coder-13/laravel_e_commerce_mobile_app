<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $message = 'message';
    return view('home' , compact('message'));
});
Route::get('/product', function () {
    return view('product');
});
