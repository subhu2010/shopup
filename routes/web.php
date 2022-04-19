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

Route::get('cart-list-proceed', function () {
    return view('frontend.pages.proceed');
});

Route::get('payment', function () {
    return view('frontend.pages.payment');
});

Route::get('confirm', function () {
    return view('frontend.pages.confirm');
});



Route::get('user-dashboard', function () {
    return view('frontend.pages.user-dashboard');
});

Route::get('user-order', function () {
    return view('frontend.pages.user-order');
});

Route::get('user-wishlist', function () {
    return view('frontend.pages.user-wishlist');
});

Route::get('user-edit', function () {
    return view('frontend.pages.user-edit');
});

Route::get('user-cart', function () {
    return view('frontend.pages.user-cart');
});

Route::get('user-history', function () {
    return view('frontend.pages.user-history');
});







// vendor route
Route::get('vendor-dashboard', function () {
    return view('vendor.pages.dashboard');
});
