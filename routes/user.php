<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserDashboardController;

//User Or Author Routes
Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('update-avater', [UserDashboardController::class, 'updateAvater'])->name('update.avater');
});
