<?php

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
    // do not delete this route, only if you replace the welcome with login page
    // return view('welcome');
    return view('auth.login'); 
});

Route::get('language/{locale}', [App\Http\Controllers\HomeController::class, 'language'])->name('language');


Route::middleware(['auth'])->group(function () {
    // web.php
    Route::resource('departments', App\Http\Controllers\DepartmentController::class);
    Route::delete('departments/force/{id}', [App\Http\Controllers\DepartmentController::class, 'forceDestroy'])->name('departments.forceDestroy');
    Route::post('departments/restore/{id}', [App\Http\Controllers\DepartmentController::class, 'restore'])->name('departments.restore');
    
    Route::resource('retentions', App\Http\Controllers\LoginRetentionController::class);
    
    
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users_join', [App\Http\Controllers\UserController::class, 'index2'])->name('users_join');
    
    Route::post('sendemail', [App\Http\Controllers\TestController::class, 'sendTestEmail'])->name('sendemail');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});

Auth::routes(); // do not delete, otherwise you will disable the login/logout routes