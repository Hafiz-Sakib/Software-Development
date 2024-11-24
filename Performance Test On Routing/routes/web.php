<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/course/{id}', function ($id) {
    return view('course-details', ['id' => $id]);
})->name('course.details');

Route::get('/enroll', function () {
    return view('enroll');
})->name('enroll');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/about', function () {
    return view('about');
})->name('about');
