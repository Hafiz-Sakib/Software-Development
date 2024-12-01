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

Route::get('/color/{color}', [ExampleController::class, 'chooseColor']);
