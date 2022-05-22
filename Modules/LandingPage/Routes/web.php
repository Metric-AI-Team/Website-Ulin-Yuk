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

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/dashboard', [LandingPageController::class, 'dashboard']);
Route::get('/about', [LandingPageController::class, 'about']);
Route::get('/profile', [LandingPageController::class, 'profile']);
Route::get('/topup', [LandingPageController::class, 'topup']);
Route::post('/profile/update', [LandingPageController::class, 'update_profile']);
Route::post('/profile/topup', [LandingPageController::class, 'update_saldo']);
Route::get('/destination', [LandingPageController::class, 'destination']);
Route::get('/culinary', [LandingPageController::class, 'culinary']);
Route::get('/team', [LandingPageController::class, 'team']);
Route::get('/testimonial', [LandingPageController::class, 'testimonial']);
Route::get('/contact', [LandingPageController::class, 'contact']);
