<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/homepage/index');
});
Route::get('/login', function () {
    return view('/login/login');
});
Route::get('/register', function () {
    return view('/register/register');
});
Route::get('/admin', function () {
    return view('/admin/dashboard');
});
