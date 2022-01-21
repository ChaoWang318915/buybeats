<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeatsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContentController;
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


Route::get('/', [FrontendController::class, 'cover'])->name('cover');







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
	// User-Management Route
    Route::get('user-list', [UserController::class, 'index'])->name('user-list');

    // Beats-Collection Route
    Route::get('upload-new-beats', [BeatsController::class, 'create'])->name('upload-beats');
    Route::post('beats-store', [BeatsController::class, 'store'])->name('beats-store');
    Route::get('list-beats', [BeatsController::class, 'index'])->name('list-beats');
    Route::post('dropZoneImage', [BeatsController::class, 'dropZoneImage'])->name('drag-drop-image');
    Route::post('dropZoneAudio', [BeatsController::class, 'dropZoneAudio'])->name('drag-drop-audio');
    Route::get('my-sales', [BeatsController::class, 'mySales'])->name('my-sales');
    Route::get('my-settings', [BeatsController::class, 'mySettings'])->name('my-settings');
    Route::get('beat-licenses', [BeatsController::class, 'beatLicenses'])->name('beat-licenses');
    Route::get('support-help', [BeatsController::class, 'supportHelp'])->name('support-help');
    Route::get('buy-beats', [BeatsController::class, 'buyBeats'])->name('buy-beats');
    Route::get('my-orders', [BeatsController::class, 'myOrders'])->name('my-orders');
    Route::get('my-favorites', [BeatsController::class, 'myFavorites'])->name('my-favorites');
    Route::get('special-offers', [BeatsController::class, 'specialOffers'])->name('special-offers');
    Route::get('my-follows', [BeatsController::class, 'myFollows'])->name('my-follows');

    // Content Route
    Route::get('upload-content', [ContentController::class, 'create'])->name('upload-content');
    Route::post('content-store', [ContentController::class, 'store'])->name('content-store');
    Route::get('list-content', [ContentController::class, 'contentList'])->name('list-content');
    Route::get('edit-content/{id}', [ContentController::class, 'editContent'])->name('edit-content');
    Route::post('content-update', [ContentController::class, 'updateContent'])->name('content-update');

});

Route::get('/explore', [FrontendController::class, 'getAllReleasesBeats'])->name('collection_of_all_releases_beats');

Route::get('/content/{content}', [FrontendController::class, 'viewContent'])->name('View Content');

Route::get('/{url}', [FrontendController::class, 'getArtistAllBeats'])->name('collection_of_artist_beats');



Route::any('{query}', 
  function() { return redirect()->route('cover'); })
  ->where('query', '.*');


