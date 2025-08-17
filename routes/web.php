<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;

Route::get('/', [ViewController::class, 'viewHome'])->name('home');
Route::get('/about', [ViewController::class, 'viewAbout'])->name('about');
Route::get('/contact', [ViewController::class, 'viewContact'])->name('contact');

Route::get('/login', [AdminController::class, 'viewLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('login.request');

Route::get('/admin', [AdminController::class, 'viewAdmin'])->middleware('auth')->name('admin');

Route::get('/admin/page/{id}', [AdminController::class, 'viewEditor'])->middleware('auth')->name('editor');
