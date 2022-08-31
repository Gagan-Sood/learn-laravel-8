<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show () {
        $data = ["names" => ["Gagan","Robin","Sam", "Tony"]];
        return view("users",$data);
    }
}
