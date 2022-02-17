<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
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
    return view('auth.login');
});

Route::resource('rooms', RoomsController::class);
Route::resource('roomType', \App\Http\Controllers\RoomTypeController::class);

Route::resource('hostels', \App\Http\Controllers\HostelsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/user', [App\Http\Controllers\userRoomController::class, 'index']);
Route::get('/user/rooms/{id}', [App\Http\Controllers\userRoomController::class, 'viewRoom']);
Route::get('/user/rooms/booking/{id}', [App\Http\Controllers\userRoomController::class, 'bookRoom']);



