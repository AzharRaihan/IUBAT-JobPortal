<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyDashboardController;
use App\Http\Controllers\Auth\CompanyLoginController;
use App\Http\Controllers\Auth\CompanyRegisterController;



// Register / Login Route Group
Route::group(['as' => 'company.', 'prefix' => 'company'], function(){
    Route::get('register', [CompanyRegisterController::class, 'companyRegister'])->name('register');
    Route::post('register/create', [CompanyRegisterController::class, 'companyRegisterCreate'])->name('register.create');
    Route::get('login', [CompanyLoginController::class, 'companyLogin'])->name('login');
    Route::post('login/check', [CompanyLoginController::class, 'companyLoginCheck'])->name('login.check');
});


//After login company can access the  below Routes
Route::group(['as' => 'company.', 'prefix' => 'company', 'middleware' => ['auth', 'company']], function () {
    Route::get('dashboard', [CompanyDashboardController::class, 'dashboard'])->name('dashboard');
    Route::put('update-avater', [CompanyDashboardController::class, 'updateAvater'])->name('update.avater');
    Route::get('edit-profile', [CompanyDashboardController::class, 'editProfile'])->name('edit.profile');
    Route::put('update-profile', [CompanyDashboardController::class, 'profileUpdate'])->name('update-profile');
    Route::get('change-passwrod', [CompanyDashboardController::class, 'changePassword'])->name('change.password');
    Route::put('update-password', [CompanyDashboardController::class, 'updatePassword'])->name('update.password');
});