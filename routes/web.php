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

    Route::post('exportxls', [App\Http\Controllers\TestController::class, 'exportXls'])->name('exportxls');

    Route::post('exportPDF', [App\Http\Controllers\TestController::class, 'exportPDF'])->name('exportPDF');

    Route::get('dateExamples', [App\Http\Controllers\TestController::class, 'dateExamples'])->name('dateExamples');
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});


Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    
    $status = Password::sendResetLink(
        $request->only('email')
    );
    
    return $status === Password::RESET_LINK_SENT
    ? back()->with(['status' => __($status)])
    : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Auth::routes(); // do not delete, otherwise you will disable the login/logout routes