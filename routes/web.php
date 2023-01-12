<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('Store', [App\Http\Controllers\NavbarController::class, 'store']);
Route::get('Admin', [App\Http\Controllers\NavbarController::class, 'admin']);
Route::resource('FAQ', FaqController::class);
Route::resource('Contact', ContactController::class);
Route::resource('News', NewsController::class);
Route::resource('Profile', ProfileController::class);