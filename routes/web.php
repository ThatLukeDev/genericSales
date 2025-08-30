<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Livewire\ViewPage;
use App\Livewire\ViewLogin;
use App\Livewire\ViewAdmin;

Route::get("/", ViewPage::class);

Route::get("pages/{name}", ViewPage::class);

Route::get("login", ViewLogin::class)->name("login");

Route::get("admin", ViewAdmin::class)->middleware("auth");
