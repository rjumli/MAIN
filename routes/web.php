<?php

use App\Http\Controllers\VelzonRoutesController;
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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    
    Route::controller(VelzonRoutesController::class)->group(function () {
        Route::get('/', 'dashboard');
    });

    Route::prefix('utility')->group(function(){
        Route::prefix('logs')->group(function(){
            Route::controller(App\Http\Controllers\Utility\LogController::class)->group(function () {
                Route::get('/authentications','authentication');
                Route::get('/activities','activity');
            });
        });
        Route::resource('/backups', App\Http\Controllers\Utility\BackupController::class);
    });
});
