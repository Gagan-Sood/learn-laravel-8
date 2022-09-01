<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post("user", [UserController::class,'getData']);
Route::view("login", "login");

Route::view("noaccess", "noaccess");
Route::get('/', function () {
    return view('welcome');
});

// Example of route middleware
Route::view("about", "about")->middleware('checkAge');

// Example of group middleware
// Route::group(['middleware'=>['protectedPage']],function(){
//     Route::view("about", "about");
// });