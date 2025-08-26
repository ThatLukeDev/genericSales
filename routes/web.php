<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Livewire\ViewPage;
use App\Livewire\ViewLogin;

Route::get("/", ViewPage::class);

Route::get("/pages/{page}", ViewPage::class);

Route::get("/admin/login", ViewLogin::class);

require __DIR__.'/auth.php';
