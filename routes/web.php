<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FoodController@showHomePage');
Route::get('blog', 'FoodController@showBlogPage');
Route::get('menu', 'FoodController@showMenuPage');
Route::get('news', 'FoodController@showNewsPage');
Route::get('location', 'FoodController@showLocationPage');
Route::get('reservation', 'FoodController@showReservPage');
Route::get('staff', 'FoodController@showStaffPage');
Route::get('gallery', 'FoodController@showGalleryPage');