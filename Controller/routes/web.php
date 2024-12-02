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



Route::get('/input-age', [ExampleController::class, 'showForm']); // Route to display the form
Route::post('/check-access', [ExampleController::class, 'checkAccess'])->name('checkAge'); // Route to handle form submission
Route::get('/adult/{age}', [ExampleController::class, 'adult'])->name('adult'); // Route for adult page
Route::get('/minor/{age}', [ExampleController::class, 'minor'])->name('minor'); // Route for minor page
