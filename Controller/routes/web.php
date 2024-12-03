<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/message', [ExampleController::class, 'showMessage']);
Route::get('/data', [ExampleController::class, 'showData']);
Route::get('/showList', [ExampleController::class, 'showList']);


Route::get('/form', function () {
    return view('form');
});
Route::post('/submit', [ExampleController::class, 'handleForm']);



// Part 02 Have Started

Route::get('/conditional_message', [ExampleController::class, 'checkCondition']);

Route::get('/numbers', [ExampleController::class, 'generateNumbers']);
Route::get('/random', [ExampleController::class, 'randomNumbers']);




Route::get('/color/{color}', [ExampleController::class, 'chooseColor']);
Route::get('/choose-color-form', [ExampleController::class, 'showChooseColorForm']);
Route::post('/choose-color', [ExampleController::class, 'handleChooseColor']);



// Route to show the form where the user can enter their age
Route::get('/input-age', [ExampleController::class, 'showForm']);

// Route to handle form submission, passing age as a parameter
Route::post('/check-access', [ExampleController::class, 'checkAccess'])->name('check-access');

// Route for age-based page (adult or minor) with age as a URL parameter
Route::get('/check-access/{age}', [ExampleController::class, 'checkAgePage'])->name('check-access-age');


Route::get('/api-simulation', [ExampleController::class, 'simulateApi']);


Route::get('/chessboard', [ExampleController::class, 'chessboard']);
