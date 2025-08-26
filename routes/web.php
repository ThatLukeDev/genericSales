<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Livewire\ViewPage;

Route::get("/", ViewPage::class);

Route::get("/pages/{page}", ViewPage::class);

require __DIR__.'/auth.php';
