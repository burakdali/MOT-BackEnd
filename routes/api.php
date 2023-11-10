<?php

use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\FriendlySiteController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\MediaCenterController;
use App\Http\Controllers\RelatedSiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailController;
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


Route::apiResource('mainCategories', MainCategoryController::class);
Route::apiResource('relatedSites', RelatedSiteController::class);
Route::apiResource('friendlySites', FriendlySiteController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('mediaCenter', MediaCenterController::class);
Route::apiResource('criterias', CriteriaController::class);
Route::get("get_service_details/{id}", [ServiceDetailController::class, "get_service_details"]);
