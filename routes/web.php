<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\FrontendController;

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
// Login Routes
Auth::routes();
// Include Admin Route
@include('admin.php');
// Include Company Route
@include('company.php');
// Include User Route
@include('user.php');





// Login Socialite
// Route::group(['as' => 'login.', 'prefix' => 'login', 'namespace' => 'Auth'], function () {
//     Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
//     Route::get('/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('callback');
// });


// Frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('search-by-company', [FrontendController::class, 'searchByCompany'])->name('search.by.company');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');






