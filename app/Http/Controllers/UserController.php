<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getData(Request $request)
    {
        $request->validate([
            "username" => 'required|max:15',
            "password" => 'required|min:5'
        ]);
        return $request->input();
    }
}
