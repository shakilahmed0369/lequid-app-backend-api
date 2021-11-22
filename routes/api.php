<?php

use App\Http\Controllers\api\FlatController;
use App\Http\Controllers\api\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/flats/paidlist/{id}', [FlatController::class, 'getPaidList'])->name('flats.paidlist');
Route::apiResource('/flats', FlatController::class);
Route::apiResource('/shops', ShopController::class);
