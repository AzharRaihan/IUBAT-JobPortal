<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserDashboardController;

//User Or Author Routes
Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', [UserDashboardController::class, 'dashboard'])->name('dashboard');
    Route::put('update-avater', [UserDashboardController::class, 'updateAvater'])->name('update.avater');
    Route::put('update-password', [UserDashboardController::class, 'updatePassword'])->name('update.password');
    Route::put('edit-profile', [UserDashboardController::class, 'editProfile'])->name('edit-profile');
});
