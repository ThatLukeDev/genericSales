<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    function viewLogin() {
        return Inertia::render('login');
    }

    function login() {
    }
}
