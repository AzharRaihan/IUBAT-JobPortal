<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileSettingController;


//Admin Routes
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('profile', [ProfileSettingController::class, 'profile'])->name('profile');
    Route::put('profile-update', [ProfileSettingController::class, 'profileUpdate'])->name('profile.update');
    Route::get('change-password', [ProfileSettingController::class, 'changePassword'])->name('change.password');
    Route::put('password-update', [ProfileSettingController::class, 'updatePassword'])->name('password.update');
    Route::get('dashboard',[AdminDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('user',[AdminDashboardController::class, 'user'])->name('user');
    Route::get('create-user',[AdminDashboardController::class, 'createUser'])->name('create.user');
    Route::get('create-role',[AdminDashboardController::class, 'roleCreate'])->name('create.role');
    Route::get('role',[AdminDashboardController::class, 'role'])->name('role');
    Route::get('data-table',[AdminDashboardController::class, 'dataTable'])->name('data.table');
    Route::get('setting', [AdminDashboardController::class, 'setting'])->name('setting');
});

// Setting Routes
Route::group(['as' => 'admin.setting.', 'prefix' => 'admin/setting'], function(){
    Route::get('generel', [SettingController::class, 'generel'])->name('generel');
    Route::put('generel-update', [SettingController::class, 'generelUpdate'])->name('generel.update');
    Route::put('appearance-update', [SettingController::class, 'appearanceUpdate'])->name('appearance.update');
    Route::put('mail-update', [SettingController::class, 'mailUpdate'])->name('mail.update');
});
