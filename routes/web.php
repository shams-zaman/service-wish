<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin;
// use App\Http\Controllers\User;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/agency/{slug}', [App\Http\Controllers\Admin\AgencyController::class, 'showagn'])->name('showagn');
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');
Route::get('/agency', [App\Http\Controllers\Admin\AgencyController::class, 'all_agency'])->name('all_agency');
Route::get('/blog-posts', [App\Http\Controllers\BlogController::class, 'show'])->name('blogshow');
Route::get('/blog-posts/{slug}', [App\Http\Controllers\BlogController::class, 'showblogitem'])->name('showblogitem');
Route::get('/agency/profile/{slug}', [App\Http\Controllers\Admin\AgencyController::class, 'ag_details'])->name('ag_details');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('all_users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('all_users');
    Route::get('agency-desc/{id}', [App\Http\Controllers\Admin\AgencyController::class, 'agency_desc'])->name('agency-desc');
    Route::post('category', [App\Http\Controllers\CatController::class, 'store'])->name('cat.create');
    Route::get('category', [App\Http\Controllers\CatController::class, 'index'])->name('cat.show');
    Route::get('agency-request', [App\Http\Controllers\Admin\AgencyController::class, 'show_ag_req'])->name('agency_request');
    Route::get('agency-approve/{id}', [App\Http\Controllers\Admin\AgencyController::class, 'agency_aprove'])->name('agency-approve');
});
Route::group(['as' => 'user.',  'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');
});
Route::group(['as' => 'agency.',  'prefix' => 'myagency', 'namespace' => 'Agency', 'middleware' => ['auth', 'agency']], function () {
    Route::get('dashboard', [App\Http\Controllers\Agency\AgencyController::class, 'index'])->name('dashboard');
});
Route::get('agency-form', [App\Http\Controllers\Agency\AgencyController::class, 'show_form'])->name('agency-form')->middleware('auth');
Route::get('agency-pending', [App\Http\Controllers\Agency\AgencyController::class, 'show_pending'])->name('agency-pending')->middleware('auth');
Route::post('agency-pending', [App\Http\Controllers\Agency\AgencyController::class, 'store'])->name('agency-store')->middleware('auth');










Route::get('/hospital', function () {
    return view('hospital');
});
Route::get('/job-desc', function () {
    return view('frontend.job-desc');
});
Route::get('/app', function () {
    return view('frontend.layouts.app');
});
// Route::get('/blog-posts', function () {
//     return view('frontend.layouts.blog-posts');
// });
Route::get('/exparts', function () {
    return view('frontend.exparts');
});
Route::get('/devs', function () {
    return view('frontend.devs');
});
Route::get('/agency/web-development', function () {
    return view('frontend.pages.webdevelopment');
});
