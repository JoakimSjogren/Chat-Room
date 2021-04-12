<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SendMessageController;
use App\Models\Message;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::view('/', 'index')->name('login')->middleware('guest');
Route::view('register', 'register')->name('register')->middleware('guest');
Route::post('login', LoginController::class);
Route::get('room', RoomController::class)->middleware('auth');
Route::get('logout', LogoutController::class);
Route::post('register', RegisterController::class);
Route::post('message', SendMessageController::class);
