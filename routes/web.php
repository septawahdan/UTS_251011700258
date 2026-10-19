<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::view('/', 'pages.home')->name('home');

Route::get('/courses', [CourseController::class, 'index'])
    ->name('courses.index');

Route::get('/courses/{id}', [CourseController::class, 'show'])
    ->name('courses.show');

Route::view('/about', 'pages.about')->name('about');

Route::view('/profil', 'pages.profil')->name('profil');