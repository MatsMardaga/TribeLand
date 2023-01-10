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
    return view('Home');
});
Route::get('News', function () {
    return view('News');
});
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
Route::get('Login', function () {
    return view('Login');
});
Route::get('Profile', function () {
    return view('Profile');
});

