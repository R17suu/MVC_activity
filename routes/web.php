<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ma/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('ma/students', StudentController::class)->names('students');
