<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/hero', function () {
    return view('hero');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/shop', function () {
    return view('shop');
});
