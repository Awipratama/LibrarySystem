<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Dashboard', function () {
    return view('dashBoard');
});
Route::get('/Login', function () {
    return view('login');
});
