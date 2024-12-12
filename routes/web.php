<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('index');

Route::get('/detail', function () {
    return view('details.index');
})->name('detail');

Route::get('/auth/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/product/add', function () {
    return view('addProduct.index');
})->name('addProduct');

Route::get('/product/manage', function () {
    return view('manageProduct.index');
})->name('manageProduct');

