<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\FaqController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FaqQuestionController;

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumMessageController;
use App\Http\Controllers\ForumReplyController;

use App\Http\Controllers\ShowAllProfilesController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('ShowAllProfiles/index/{id}',[ShowAllProfilesController::class, 'index'])->name('test');


//Routes for FAQ page
Route::resource('FAQ', FaqController::class);
Route::resource('FAQcategory', FaqCategoryController::class);
Route::get('FAQquestion/create/{FAQquestion}',[FaqQuestionController::class, 'create'])->name('FAQ.createwithID'); // Code provided by Sander De Pauw and used with his permission


//Routes for Forum page
Route::resource('Forum', ForumController::class);
Route::resource('ForumMessage', ForumMessageController::class);
Route::get('ForumReply/create/{ForumReply}',[ForumReplyController::class, 'create'])->name('Forum.createwithID'); // Code based on previous code which was provided by Sander

Route::resource('Contact', ContactController::class);
Route::resource('News', NewsController::class);
Route::resource('Profile', UserController::class);
Route::resource('Allprofiles', ProfileController::class);
Route::resource('Admin', AdminController::class);