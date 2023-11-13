<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\MainCategoryTranslationController;
use  App\Http\Controllers\MediaCenterController;
use App\Http\Controllers\MediaCenterTranslationController;
use  App\Http\Controllers\CriteriaTranslationController;
use  App\Http\Controllers\CriteriaController;
use  App\Http\Controllers\LinkController;
use  App\Http\Controllers\RelatedSiteController;
use  App\Http\Controllers\RelatedSiteTranslationController;
use  App\Http\Controllers\FriendlySiteController;
use  App\Http\Controllers\FriendlySiteTranslationController;
use  App\Http\Controllers\ServiceController;
use  App\Http\Controllers\ServiceTranslationController;
use  App\Http\Controllers\ServiceDetailController;
use  App\Http\Controllers\ServiceDetailTranslationController;




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

Route::get('/', [MainCategoryTranslationController::class, 'index']);



/**start all_category Route */
Route::resource('create_category', MainCategoryController::class);
Route::resource('all_category', MainCategoryTranslationController::class);
/** end all_category Route */







/**start media_center Route */
Route::resource('create_media_center', MediaCenterController::class);
Route::resource('media_center', MediaCenterTranslationController::class);
/** end media_center Route */


/**start criteria Route */
Route::resource('create_criteria', CriteriaController::class);
Route::resource('criteria', CriteriaTranslationController::class);
/** end criteria Route */



/**start Minister Route */

/**Related_Site */
Route::resource('Related_Site', RelatedSiteTranslationController::class);
Route::resource('create_Related_Site', RelatedSiteController::class);


/**Friendly_Site */
Route::resource('Friendly_Site', FriendlySiteTranslationController::class);
Route::resource('create_Friendly_Site', FriendlySiteController::class);

/**Links */
Route::resource('Links', LinkController::class);

/** end Minister Route */

/**start Services Route */
Route::resource('all_services', ServiceTranslationController::class);
Route::resource('create_services', ServiceController::class);
Route::resource('Services_details', ServiceDetailTranslationController::class);

/** end Services Route */
