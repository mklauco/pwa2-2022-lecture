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
    return view('welcome');
});

Route::get('/first', function () {
    return view('first');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('second', [App\Http\Controllers\SimpleController::class, 'view']);
Route::get('third', [App\Http\Controllers\SimpleController::class, 'viewVariable']);
Route::get('fourth', [App\Http\Controllers\SimpleController::class, 'viewData']);
Route::get('fifth/{parameter}', [App\Http\Controllers\SimpleController::class, 'viewParameter'])->name('fifth');

Route::post('send', [App\Http\Controllers\SimpleController::class, 'sendData']);

Route::get('departments', [App\Http\Controllers\DepartmentController::class, 'index'])->name('departments');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
