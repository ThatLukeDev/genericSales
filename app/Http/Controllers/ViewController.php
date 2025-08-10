<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Detail;

class ViewController extends Controller
{
    function viewHome() {
        return Inertia::render('home', ["detail" => Detail::getPage("home")]);
    }
}
