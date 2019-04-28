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

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

Route::get('/terms-and-conditions', 'TermFrontController@index');

// Route::get('/users/{id}', function ($id) { //Inser dynamic value/parameters
//     return 'This is user ' .$id;
// });
Auth::routes();

Route::get('/login-admin-panelpage', 'BackEndController@index');
Route::get('/home-admin', 'HomeController@index');
Route::resource('mobile', 'MVMMController');
Route::resource('title-description', 'MVTDController');
Route::resource('link-url', 'MVLinkController');
Route::resource('about', 'AboutUsController');
Route::resource('terms', 'TermsController');
Route::resource('contact', 'ContactController');
Route::resource('faq', 'FaqController');
Route::resource('pricing1', 'Pricing1Controller');
Route::resource('pricing2', 'Pricing2Controller');
Route::resource('pricing3', 'Pricing3Controller');
Route::resource('screenshot', 'ScreenShotController');

Route::resource('analysis', 'HIWAnalysisController');
Route::resource('new', 'HIWNewController');
Route::resource('noti', 'HIWNotiController');
Route::resource('video', 'HIWVideoController');
Route::resource('web', 'HIWWebController');
Route::resource('icon', 'IconController');


