<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserController extends Controller
{
    public function saveData(Request $request)
    {
        $request->validate([
            "username" => 'required|max:15',
            "password" => 'required|min:5'
        ]);
        return $request->input();
    }

    public function getData()
    {
        return User::all();
    }
    public function index() {
        return DB::select("Select * from users");
    }
}
