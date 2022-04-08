<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\CompanyRegisterController;
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
Route::group(['as' => 'login.', 'prefix' => 'login', 'namespace' => 'Auth'], function () {
    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
    Route::get('/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('callback');
});


// Frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('/career-details', [FrontendController::class, 'careerDetails'])->name('career.details');
Route::get('/category-page', [FrontendController::class, 'categoryPage'])->name('category.page');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/job-apply', [FrontendController::class, 'jobApply'])->name('job.apply');
Route::get('/main-category', [FrontendController::class, 'mainCategory'])->name('main.category');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/news-details', [FrontendController::class, 'newsDetails'])->name('news.details');
Route::get('/product-inspection', [FrontendController::class, 'productInspection'])->name('product.inspection');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::post('ddd', [CompanyRegisterController::class, 'create'])->name('ddd');
Route::get('/testimonial', [FrontendController::class, 'testimonial'])->name('testimonial');







