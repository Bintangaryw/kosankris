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
Route::get('/admin-rooms', function () {
    return view('/admin/rooms/rooms');
});
Route::get('/admin-occupants', function () {
    return view('/admin/occupants/occupants');
});
Route::get('/admin-occupant-details', function () {
    return view('/admin/occupants/occupant_detail');
});
