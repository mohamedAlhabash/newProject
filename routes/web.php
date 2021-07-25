<?php

use App\Http\Controllers\siteController;
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

Route::prefix('site')->name('site.')->group(function(){
    Route::get('home',[siteController::class,'home'])->name('home');
    Route::get('about',[siteController::class,'about'])->name('about');
    Route::get('services',[siteController::class,'services'])->name('services');
    Route::get('portfolio',[siteController::class,'portfolio'])->name('portfolio');
    Route::get('team',[siteController::class,'team'])->name('team');
    Route::get('contact',[siteController::class,'contact'])->name('contact');
    Route::post('contact',[siteController::class,'contactSubmit'])->name('contactSubmit');
    Route::get('portfolioDetails',[siteController::class,'portfolioDetails'])->name('portfolioDetails');
});

Route::get('/', function () {
    return view('welcome');
});
