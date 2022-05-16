<?php

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

use Illuminate\Support\Facades\Route;
use Modules\LandingPage\Http\Controllers\LandingPageController;

Route::prefix('destination-place')->group(function () {
    Route::get('/', [LandingPageController::class, 'index']);
    Route::post('/store', [LandingPageController::class, 'store']);
    Route::get('/edit/{id}', [LandingPageController::class, 'edit']);
    Route::post('/update/{id}', [LandingPageController::class, 'update']);
    Route::get('/delete/{id}', [LandingPageController::class, 'destroy']);
    Route::get('/getdata/{id}', [LandingPageController::class, 'getdata']);
});

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/about', [LandingPageController::class, 'about']);
Route::get('/destination', [LandingPageController::class, 'destination']);
Route::get('/culinary', [LandingPageController::class, 'culinary']);
Route::get('/team', [LandingPageController::class, 'team']);
Route::get('/testimonial', [LandingPageController::class, 'testimonial']);
Route::get('/contact', [LandingPageController::class, 'contact']);
