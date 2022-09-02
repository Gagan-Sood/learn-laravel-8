<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            "username" => 'required|max:15',
            "password" => 'required|min:5'
        ]);
        $username = $request->input('username');
        $request->session()->put('username', $username);
        return redirect("dashboard");
    }
}
