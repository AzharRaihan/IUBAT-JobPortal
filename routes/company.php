<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;
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
    Route::get('dashboard', [CompanyController::class, 'dashboard'])->name('dashboard');
});