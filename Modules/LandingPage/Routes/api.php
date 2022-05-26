<?php

use Illuminate\Http\Request;
use Modules\LandingPage\Http\Controllers\LandingPageController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/landingpage', function (Request $request) {
    return $request->user();
});

Route::prefix('destination')->group(function () {
    Route::get('/', [LandingPageController::class, 'rating']);
});
