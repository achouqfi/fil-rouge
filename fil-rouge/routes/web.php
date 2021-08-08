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

Route::get('/plan', function () {
    return view('user.plan.reservation');
});

Auth::routes();


Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', 'App\Http\Controllers\HomeController@adminHome')->name('admin')->middleware('is_admin');
Route::get('/changePassword/{id}','App\Http\Controllers\HomeController@changePassword');
Route::post('/changePassword', 'App\Http\Controllers\HomeController@store');


// contact route
Route::get('/contact','App\Http\Controllers\ContactController@index');
Route::post('/contact/create','App\Http\Controllers\ContactController@store');
Route::get('/contactadmin','App\Http\Controllers\ContactController@admin');
Route::delete('/contact/{id}','App\Http\Controllers\ContactController@destroy');

// shap route
Route::get('/ship','App\Http\Controllers\ShapController@index');
Route::post('/ship/create','App\Http\Controllers\ShapController@store');
Route::get('/shipadmin','App\Http\Controllers\ShapController@admin');
Route::put('/etatCommande/{id}','App\Http\Controllers\ShapController@etatUpdate');
Route::put('/UpdateUser/{id}','App\Http\Controllers\ShapController@UserUpdate');
Route::delete('/annulationUser/{id}','App\Http\Controllers\ShapController@annulation');


//users
Route::get('/users','App\Http\Controllers\HomeController@user');
Route::delete('/users/{id}','App\Http\Controllers\HomeController@DltUser');

//user view page
// Route::get('/compte','App\Http\Controllers\UserInfoController@index');

//articles
Route::get('/article','App\Http\Controllers\ArticleController@index');
Route::get('/blog','App\Http\Controllers\ArticleController@blog');
Route::get('/article/create', 'App\Http\Controllers\ArticleController@create');
Route::post('/article/save','App\Http\Controllers\ArticleController@store');
Route::get('/article/{id}/edit', 'App\Http\Controllers\ArticleController@edit');
Route::put('/article/{id}', 'App\Http\Controllers\ArticleController@update');
Route::get('/article/{id}/show', 'App\Http\Controllers\ArticleController@show');
Route::delete('/articleDlt/{id}','App\Http\Controllers\ArticleController@destroy');
Route::get('/comment/{id}/shomAdmin', 'App\Http\Controllers\ArticleController@showComment');

//comments
Route::post('/comment/save','App\Http\Controllers\CommentController@store');
Route::delete('/commentDlt/{id}','App\Http\Controllers\CommentController@destroy');
Route::delete('/commentDltDashboard/{id}','App\Http\Controllers\CommentController@DltComment');


//hotels
Route::get('/AdminHotel', 'App\Http\Controllers\RiadController@index');
Route::get('/hotel', 'App\Http\Controllers\RiadController@hotelView');
Route::get('/hotelDetails/{id}', 'App\Http\Controllers\RiadController@showHotel');
Route::post('/AdminAddHotel', 'App\Http\Controllers\RiadController@store');
Route::delete('/AdminDltHotel/{id}', 'App\Http\Controllers\RiadController@destroy');
Route::get('/AdminEditHotel/{id}', 'App\Http\Controllers\RiadController@edit');
Route::put('/AdminUpdateHotel/{id}', 'App\Http\Controllers\RiadController@update');

//photos
Route::get('/adminPhotoHotel/{id}', 'App\Http\Controllers\RiadController@showPhotos');
Route::get('/adminPhotoHotel', 'App\Http\Controllers\PhotoHotelController@index');
Route::post('/AdminAddPhotoHotel', 'App\Http\Controllers\PhotoHotelController@store');
Route::delete('/AdminDltPhotoHotel/{id}', 'App\Http\Controllers\PhotoHotelController@destroy');

//chambres
Route::get('/AdminChambreHotel/{id}', 'App\Http\Controllers\RiadController@showChambres');
Route::get('/ShowChambreOption/{id}', 'App\Http\Controllers\ChambreController@showChambre');
Route::post('/AdminAddChambre', 'App\Http\Controllers\ChambreController@store');
Route::delete('/AdminDltChambre/{id}', 'App\Http\Controllers\ChambreController@destroy');
Route::get('/AdminEditChambre/{id}', 'App\Http\Controllers\ChambreController@edit');
Route::put('/AdminUpdateChambre/{id}', 'App\Http\Controllers\ChambreController@update');
