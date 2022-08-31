<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getData(Request $request)
    {
        return $request->input();
    }
}
