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


Route::middleware(['auth'])->group(function () {

    Route::resource('departments', App\Http\Controllers\DepartmentController::class);

    Route::resource('users', App\Http\Controllers\UserController::class);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Auth::routes(); // do not delete, otherwise you will disable the login/logout routes