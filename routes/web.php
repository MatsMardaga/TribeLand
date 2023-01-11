<?php

use Illuminate\Support\Facades\Auth;
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



Route::get('Store', function () {
    return view('Store');
});
Route::get('FAQ', function () {
    return view('FAQ');
});
Route::get('Contact', function () {
    return view('Contact');
});
Route::get('Profile', function () {
    return view('Profile');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('News', [App\Http\Controllers\NavbarController::class, 'news']);
Route::get('Store', [App\Http\Controllers\NavbarController::class, 'store']);
Route::get('FAQ', [App\Http\Controllers\NavbarController::class, 'faq']);
Route::get('Contact', [App\Http\Controllers\NavbarController::class, 'Contact']);
Route::get('Profile', [App\Http\Controllers\NavbarController::class, 'profile']);
