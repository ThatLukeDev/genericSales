<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Detail;

class ViewController extends Controller
{
    function viewHome() {
        return Inertia::render('page', ["detail" => Detail::getPage("home")]);
    }
    function viewAbout() {
        return Inertia::render('page', ["detail" => Detail::getPage("about")]);
    }
    function viewContact() {
        return Inertia::render('page', ["detail" => Detail::getPage("contact")]);
    }
}
