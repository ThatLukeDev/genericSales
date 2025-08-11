<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'viewHome'])->name('home');
Route::get('/about', [ViewController::class, 'viewAbout'])->name('about');
Route::get('/contact', [ViewController::class, 'viewContact'])->name('contact');
