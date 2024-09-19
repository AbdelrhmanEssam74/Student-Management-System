<?php
use App\Controllers\HomeController;
use App\Controllers\StudentController;
use PROJECT\HTTP\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/student', [StudentController::class, 'index']);