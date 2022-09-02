<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    public function saveData(Request $request)
    {
        $request->validate([
            "username" => 'required|max:15',
            "password" => 'required|min:5'
        ]);
        $request->session()->flash("username", $request->input("username"));
        return redirect("storeUser");
    }

    public function getData()
    {
        return User::all();
    }

    public function index() {
        return DB::select("Select * from users");
    }

    public function fetchUsers()
    {
        // Fetching data using HTTP client
        dd("not working");
       return Http::get("https://reqres.in/api/users?page=1");
    }
}
