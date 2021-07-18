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

Route::get('/', function () {
    return view('user.home');
});


Route::get('/about', function () {
    return view('user.aboutUs');
});

// (["register"=>false])
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', 'App\Http\Controllers\HomeController@adminHome')->name('admin')->middleware('is_admin');

// contact route
Route::get('/contact','App\Http\Controllers\ContactController@index');
Route::post('/contact/create','App\Http\Controllers\ContactController@store');
Route::get('/contactadmin','App\Http\Controllers\ContactController@admin');
Route::delete('/contact/{id}','App\Http\Controllers\ContactController@destroy');

// shap route
Route::get('/ship','App\Http\Controllers\ShapController@index');
Route::post('/ship/create','App\Http\Controllers\ShapController@store');
Route::get('/shipadmin','App\Http\Controllers\ShapController@admin');
Route::delete('/shipadmin/{id}','App\Http\Controllers\ShapController@destroy');

//users
Route::get('/users','App\Http\Controllers\HomeController@user');


//user view page
Route::get('/compte','App\Http\Controllers\UserInfoController@index');


//article
Route::get('/article','App\Http\Controllers\ArticleController@index');
Route::get('/article/create', 'App\Http\Controllers\ArticleController@create');
Route::post('/article/save','App\Http\Controllers\ArticleController@store');
Route::get('/article/{id}/edit', 'App\Http\Controllers\ArticleController@edit');
Route::put('/article/{id}', 'App\Http\Controllers\ArticleController@update');
Route::get('/articleUser','App\Http\Controllers\ArticleController@');
Route::delete('/articleDlt/{id}','App\Http\Controllers\ArticleController@destroy');


