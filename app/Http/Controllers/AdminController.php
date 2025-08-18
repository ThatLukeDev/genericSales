<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use Illuminate\Support\Facades\Auth;

use App\Models\Detail;

class AdminController extends Controller
{
    function viewLogin() {
        return Inertia::render('login');
    }

    function login(Request $request) {
        $validated = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        if (Auth::attempt($validated)) {
            return redirect("/admin");
        }

        return back()->withErrors(["err" => "Invalid credentials"]);
    }

    function viewAdmin() {
	    return Inertia::render('admin');
    }

    function viewEditor($id) {
	    return Inertia::render('editor', ["id" => $id, "detail" => Detail::getPage($id)]);
    }

    function editor($id, Request $request) {
	    Detail::getPage($id)->update([
		    "title" => $request->title,
		    "text" => $request->text,
		    "description" => $request->description
	    ]);

	    return redirect("/admin/page/" . $id);
    }
}
