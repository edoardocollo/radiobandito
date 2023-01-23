<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/adminDashboard', function () {return Inertia::render('AdminDashboard');})->middleware(['auth', 'verified'])->name('adminDashboard');
Route::get('programmi', [\App\Http\Controllers\ShowController::class, 'index'])->name('programmi');
Route::get('djs', [\App\Http\Controllers\DjController::class, 'index'])->name('djs');
Route::get('podcasts', [\App\Http\Controllers\PodcastController::class, 'index'])->name('podcasts');
Route::get('eventi', [\App\Http\Controllers\EventsController::class, 'index'])->name('eventi');


Route::get('/dashboard', function () {
    return Inertia::render('Pages');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/page/{pageName}/{pageId}', [\App\Http\Controllers\PageController::class, 'pagesRouter'])->name('page');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
