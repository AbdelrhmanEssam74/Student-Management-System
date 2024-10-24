<?php
use App\Controllers\HomeController;
use App\Controllers\StudentController;
use App\Controllers\SignupController;
use PROJECT\HTTP\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);