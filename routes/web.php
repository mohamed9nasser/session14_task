<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'showUsers'])->name('users.index');
Route::post('/generate-users', [UserController::class, 'generateUsers'])->name('users.generate');

Route::get('/', function () {
    return view('welcome');
});
