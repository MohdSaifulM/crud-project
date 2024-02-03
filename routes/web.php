<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, "index"])->name("user.index"); 

Route::get('/user/register', [UserController::class, "register"])->name("user.register"); 

Route::post('/user', [UserController::class, "registerUser"])->name("user.registerUser"); 

Route::get('/user/{user}/edit', [UserController::class, "edit"])->name("user.edit"); 

Route::put('/user/{user}/update', [UserController::class, "update"])->name("user.update"); 