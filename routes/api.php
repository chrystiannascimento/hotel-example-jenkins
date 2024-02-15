<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HotelController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('hotels', [HotelController::class,'getAllHotelData']);

// route for fetch the active hotel data based on hotel id
Route::get('hotel/{hotel_id}', [HotelController::class,'getHotelDataById']);

// route for store new hotel review
Route::post('save-hotel-review', [HotelController::class,'storeHotelReviewData']);

// route for store new hotel review
Route::put('update-hotel-review/{review_id}', [HotelController::class,'updateHotelReviewData']);

// Delete review for hotel
Route::delete('review/{review_id}', [HotelController::class,'deleteHotelReview']);