<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('home');
});


Route::get('/new-feedback', function () {
    return view('new-feedback');
});

Route::post('/new-feedback-post', [HomeController::class, 'addFeedback'])->name("addFeedback");





Route::get("/login", [AdminController::class,"showLogin"]);
Route::post("/login", [AdminController::class,"checkLogin"])->name("check");
Route::get("/admin/feedback", [AdminController::class,"viewFeedback"]);
Route::get("/admin/logout", [AdminController::class,"logout"])->name("logout");



Route::get('ajax-crud-datatable', [HomeController::class, 'index'])->name('index');
Route::post('feedback-view', [HomeController::class, 'view'])->name('view');

