<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use PgSql\Lob;

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


//Register
Route::middleware('guest')->group(function(){
    Route::get('/', function () {return view('login');});
    Route::get('register' , [AuthController::class,'registerForm']);
    Route::post('register' , [AuthController::class , 'register']);
    //Login

    Route::get('login' , [AuthController::class , 'loginForm']);
    Route::post('login' , [AuthController::class , 'login'])->name('login');

});




Route::middleware('auth')->group(function(){
    Route::get('home', function () {return view('home');});
    Route::get('logout',[AuthController::class,'logout']);
});
