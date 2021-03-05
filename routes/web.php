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

// HOME

Route::get('/index', [App\Http\Controllers\Home3Controller::class, 'index']);

// PRODUCTS

Route::prefix('category')->group(function(){
    Route::get('/{id}', [App\Http\Controllers\ProductController::class,'product']);
});

// NEWS CONTROLLER
Route::get('/news/{id?}', [App\Http\Controllers\NewsController::class, 'news']);

// PROGRAM CONTROLLER

Route::prefix('program')->group(function(){
    Route::get('/{id}', [App\Http\Controllers\ProgramController::class,'program']);
});

// ABOUT US CONTROLLER
Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'aboutus']);

// CONTACT US CONTROLLER
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'contactus']);