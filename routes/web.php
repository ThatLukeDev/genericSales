<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'viewHome'])->name('home');
