<?php

use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\FriendlySiteController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\MediaCenterController;
use App\Http\Controllers\RelatedSiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\LinkController;
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


Route::get('mainCategories', [MainCategoryController::class, 'getAllMainCategories']);
Route::get('relatedSites', [RelatedSiteController::class, 'getAllRelatedSite']);
Route::get('friendlySites', [FriendlySiteController::class, "getAllFriendlySite"]);
Route::get('services', [ServiceController::class, 'getAllServices']);
Route::get("get_service_details/{id}", [ServiceDetailController::class, "get_service_details"]);
Route::get('mediaCenter', [MediaCenterController::class, "getAllMediaCenter"]);
Route::get('criterias', [CriteriaController::class, "getAllCriteria"]);
Route::get('links', [LinkController::class, "getAllLinks"]);
Route::get('images', [ImageController::class, "getAllImages"]);
