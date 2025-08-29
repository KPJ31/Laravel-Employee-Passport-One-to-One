<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PassportController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/employees', EmployeeController::class);
Route::resource('/passports', PassportController::class);