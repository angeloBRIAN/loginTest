<?php

use Illuminate\Support\Facades\Route;
use App\Models\guestList;
use App\Http\Controllers\GuestDataController;

Route::get('/', [GuestDataController::class, 'welcome'])->middleware('guest');

Route::get('/home', [GuestDataController::class, 'user_home'])->middleware('auth');

Route::get('/login', [GuestDataController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [GuestDataController::class,'auth']);

Route::post('/logout', [GuestDataController::class,'logout']);

Route::get('/register', [GuestDataController::class,'register'])->middleware('guest');
Route::post('/register', [GuestDataController::class,'store']);