<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    public function show() {
        $members = User::all();
        return view("list", ['members' => $members]);
    }
}
