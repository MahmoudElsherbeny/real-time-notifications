<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Auth;

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


// notifications routes
Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home_page');

    Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function() {

        Route::get('/', [NotificationsController::class, 'notifications'])->name('all');
        Route::get('/mark-read/{id}', [NotificationsController::class, 'markRead'])->name('mark_read');
    
    });

    // messages routes
    Route::group(['prefix' => 'messages', 'as' => 'messages.'], function() {

        Route::get('/show/{id}', [MessagesController::class, 'show'])->name('show');
        Route::post('/create', [MessagesController::class, 'store'])->name('store');

    });

});

Auth::routes();
