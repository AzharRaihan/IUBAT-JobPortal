<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Auth\CompanyLoginController;
use App\Http\Controllers\Auth\CompanyRegisterController;

// Company Register
Route::get('company/register', [CompanyRegisterController::class, 'companyRegister'])->name('company.register');
Route::post('company/register/create', [CompanyRegisterController::class, 'companyRegisterCreate'])->name('company.register.create');
// Company Login
Route::get('company/login', [CompanyLoginController::class, 'companyLogin'])->name('company.login');
Route::post('company/login/check', [CompanyLoginController::class, 'companyLoginCheck'])->name('company.login.check');

//After login company can access the  below Routes
Route::group(['as' => 'company.', 'prefix' => 'company', 'middleware' => ['auth', 'company']], function () {
    Route::get('dashboard', [CompanyController::class, 'dashboard'])->name('dashboard');
});