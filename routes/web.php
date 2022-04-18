<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.landing-page');
});

Route::get('listing-page', function () {
    return view('frontend.pages.listing');
});

Route::get('detail', function () {
    return view('frontend.pages.detail');
});

Route::get('seller-detail', function () {
    return view('frontend.pages.seller-detail');
});

Route::get('cart-list', function () {
    return view('frontend.pages.cart-list');
});

