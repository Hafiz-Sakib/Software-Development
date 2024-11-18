<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/demo1', function () {
    return view('demo1');
});
