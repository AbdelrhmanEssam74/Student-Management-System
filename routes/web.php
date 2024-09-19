<?php
use App\Controllers\HomeController;
use App\Controllers\StudentController;
use App\Controllers\LecturersController;
use PROJECT\HTTP\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/lecturers', [LecturersController::class, 'index']);