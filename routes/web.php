<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AgencyController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\UserController;
// use App\Http\Controllers\Agency\AgencyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ReqController;
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

Auth::routes();
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/agency/agcency/{slug}', [AgencyController::class, 'showagn'])->name('showagn');
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');
Route::get('/agency', [AgencyController::class, 'all_agency'])->name('all_agency');
Route::post('/blog/{slug}', [ReqController::class, 'store'])->name('req.submit');
Route::get('/blog-posts', [App\Http\Controllers\BlogController::class, 'show'])->name('blogshow');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'showblogitem'])->name('showblogitem');
Route::get('/agency/profile/{slug}', [AgencyController::class, 'ag_details'])->name('ag_details');
Route::get('/agency/profile/inquiry/{slug}', [AgencyController::class, 'ag_details_enq'])->name('ag_details_models');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    // ? TODO: TODO: TODO: TODO: TODO: TODO:    ADMIN

    Route::get('quote-requests', [QuoteController::class, 'quote_req'])->name('quote_req');
    Route::get('quote-requests/{id}', [QuoteController::class, 'quote_details'])->name('quote_details');
    Route::post('quote-requests/{id}', [QuoteController::class, 'quote_assign'])->name('quote_assign');

    // todo =============================================================================================================
    Route::get('all_users', [UserController::class, 'index'])->name('all_users');
    Route::get('agency-desc/{id}', [AgencyController::class, 'agency_desc'])->name('agency-desc');
    Route::post('category', [CatController::class, 'store'])->name('cat.create');
    Route::post('tag', [CatController::class, 'tag_store'])->name('tag.create');
    Route::get('category', [CatController::class, 'index'])->name('cat.show');
    Route::get('category/{id}', [CatController::class, 'cat_edit'])->name('cat.edit');
    Route::get('tag/{id}', [CatController::class, 'tag_edit'])->name('tag.edit');
    Route::post('category/{id}', [CatController::class, 'cat_update'])->name('cat.update');
    Route::post('tag/{id}', [CatController::class, 'tag_update'])->name('tag.update');
    Route::get('agency-request', [App\Http\Controllers\Admin\AgencyController::class, 'show_ag_req'])->name('agency_request');
    Route::get('agency-approve/{id}', [App\Http\Controllers\Admin\AgencyController::class, 'agency_aprove'])->name('agency-approve');
    Route::get('blog-posts', [BlogController::class, 'all_blogs'])->name('all_blogs');
    Route::get('blog-posts/create', [BlogController::class, 'blog_create'])->name('blog-create');
    Route::get('blog-posts/details/{id}', [BlogController::class, 'blog_details'])->name('blog-details');
    Route::get('blog-posts/edit/{id}', [BlogController::class, 'blog_edit'])->name('blog-edit');
    Route::post('blog-posts/edit/{id}', [BlogController::class, 'blog_update'])->name('blog_update');
    Route::post('blog-posts/create', [BlogController::class, 'blog_store'])->name('blog_store');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::group(['as' => 'user.',  'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');
});
Route::group(['as' => 'agency.',  'prefix' => 'myagency', 'namespace' => 'Agency', 'middleware' => ['auth', 'agency']], function () {
    // ? TODO: TODO: TODO: TODO: TODO: TODO:    ADMIN===============================================================

    Route::get('profile', [App\Http\Controllers\Agency\AgencyController::class, 'profile'])->name('profile');
    Route::get('profile/{id}', [App\Http\Controllers\Agency\AgencyController::class, 'profile_edit'])->name('profile_edit');
    Route::post('profile/{id}', [App\Http\Controllers\Agency\AgencyController::class, 'profile_update'])->name('profile_update');
    Route::get('quote-requests/{id}', [App\Http\Controllers\Admin\QuoteController::class, 'quote_details'])->name('quote_details');
    Route::get('quote-requests', [App\Http\Controllers\Admin\QuoteController::class, 'quote_req'])->name('quote_req');
    Route::get('myservices', [App\Http\Controllers\Agency\AgencyController::class, 'myservices'])->name('myservices');
    Route::get('myservices/{id}', [App\Http\Controllers\Agency\AgencyController::class, 'myservice_edit'])->name('service.edit');
    Route::post('myservices/{id}', [App\Http\Controllers\Agency\AgencyController::class, 'myservice_update'])->name('services.update');
    Route::post('myservices', [App\Http\Controllers\Agency\AgencyController::class, 'myservices_create'])->name('services.create');
    Route::get('dashboard', [App\Http\Controllers\Agency\AgencyController::class, 'index'])->name('dashboard');
});


// ? TODO: TODO: TODO: TODO: TODO: TODO:    ADMIN===============================================================

Route::get('/agency-form', [App\Http\Controllers\Agency\AgencyController::class, 'show_form'])->name('agency-form')->middleware('auth');
Route::get('/agency-pending', [App\Http\Controllers\Agency\AgencyController::class, 'show_pending'])->name('agency-pending')->middleware('auth');
Route::post('/agency-form', [App\Http\Controllers\Agency\AgencyController::class, 'store'])->name('agency-store')->middleware('auth');
Route::post('user/enq_submit/{id}', [App\Http\Controllers\HomeController::class, 'enq_submit'])->name('enq_submit');

Route::get('dynamicModal/{id}', [
    'as' => 'dynamicModal',
    'uses' => 'HomeController@loadModal'
]);










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
