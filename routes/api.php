<?php

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


//Route for get data from Wordpress
Route::get('/getWPShows',[\App\Http\Controllers\WPDumpController::class,'getShows'])->name('getWPShows');
Route::get('/getWPDjs',[\App\Http\Controllers\WPDumpController::class,'getDjs'])->name('getWPDjs');



//PAGES
Route::get('/getPages',[\App\Http\Controllers\PageController::class,'getPages'])->name('getPages');
Route::post('/getPage',[\App\Http\Controllers\PageController::class,'getPage'])->name('getPage');

//SHOWS
Route::get('/getShows',[\App\Http\Controllers\ShowController::class,'getShows'])->name('getShows');

//DJS
Route::get('/getDjs',[\App\Http\Controllers\DjController::class,'getDjs'])->name('getDjs');


//PODCASTS
Route::get('/getPodcasts',[\App\Http\Controllers\PodcastController::class,'getPodcasts'])->name('getPodcasts');
