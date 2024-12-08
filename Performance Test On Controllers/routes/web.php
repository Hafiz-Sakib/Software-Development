<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Performance;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [Performance::class, 'showForm']);
Route::post('/generate-fibonacci', [Performance::class, 'generateFibonacci']);
