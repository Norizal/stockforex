<?php

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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostController');

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/users/{id}', function ($id) { //Inser dynamic value/parameters
//     return 'This is user ' .$id;
// });
Auth::routes();

Route::get('/login-admin-panelpage', 'BackEndController@index');



Route::get('/dashboard', 'DashboardController@index');