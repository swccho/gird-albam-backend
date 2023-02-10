<?php

use App\Http\Controllers\MediaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GridController;

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

Route::group(
    ['prefix' => 'grid'],
    function () {
        Route::post('/list', [GridController::class, 'list'])->name('Grid.List');
    });

Route::prefix('media')->group(function () {
    Route::post('upload', [MediaController::class, 'Upload'])->name('API.MEDIA.UPLOAD');
});
