<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('home');
Route::get('/aboutus', 'App\Http\Controllers\FrontendController@aboutus')->name('aboutus');
Route::get('/services', 'App\Http\Controllers\FrontendController@service')->name('services');
Route::get('/portofolio', 'App\Http\Controllers\FrontendController@portofolio')->name('portofolio');
Route::get('/secondportfolio', 'App\Http\Controllers\FrontendController@secondportfolio')->name('secondportfolio');
Route::get('/portofoliodetails', 'App\Http\Controllers\FrontendController@portofoliodetails')->name('portofoliodetails');
Route::get('/blog_grid', 'App\Http\Controllers\FrontendController@bloggrid')->name('bloggrid');
Route::get('/blog_standard', 'App\Http\Controllers\FrontendController@blogstandard')->name('blog_standard');
Route::get('/blogdetails', 'App\Http\Controllers\FrontendController@blogdetails')->name('blog_details');
Route::get('/careers', 'App\Http\Controllers\FrontendController@careers')->name('careers');
Route::get('/team', 'App\Http\Controllers\FrontendController@team')->name('team');
Route::get('/teamdetails', 'App\Http\Controllers\FrontendController@teamdetails')->name('teamdetails');
Route::get('/shop', 'App\Http\Controllers\FrontendController@shop')->name('shop');
Route::get('/products', 'App\Http\Controllers\FrontendController@products')->name('products');
Route::get('/shppingcart', 'App\Http\Controllers\FrontendController@shopingcart')->name('shppingcart');
Route::get('/checkout', 'App\Http\Controllers\FrontendController@checkout')->name('checkout');
Route::get('/faq', 'App\Http\Controllers\FrontendController@faq')->name('faq');
Route::get('/errorpage', 'App\Http\Controllers\FrontendController@errorpage')->name('error_page');
Route::get('/contact', 'App\Http\Controllers\FrontendController@contact')->name('contact');