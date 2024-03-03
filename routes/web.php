<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GalleryController::class, 'index']);

Route::get('/sign_in', [GalleryController::class, 'sign_in']);
Route::post('/proses_masuk', [GalleryController::class, 'proses_masuk']);
Route::get('/sign_up', [GalleryController::class, 'sign_up']);
Route::post('/proses_register', [GalleryController::class, 'proses_register']);

Route::middleware(['user'])->group(function () {
    Route::get('/change_password', [GalleryController::class, 'change_password']);
    Route::get('/explore', [GalleryController::class, 'explore']);
    Route::get('/getDataExplore', [GalleryController::class, 'getData']);
    Route::get('/follower_or_follow', [GalleryController::class, 'follower_or_follow']);
    Route::get('/komen', [GalleryController::class, 'komen']);
    Route::get('/my_pin', [GalleryController::class, 'my_pin']);
    Route::get('/other_pin', [GalleryController::class, 'other_pin']);
    Route::get('/pin', [GalleryController::class, 'pin']);
    Route::post('/buat_pin', [GalleryController::class, 'buat_pin']);
    Route::get('/profile', [GalleryController::class, 'profile']);
    Route::get('/logout', [GalleryController::class, 'logout']);
});
