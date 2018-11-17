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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','Admin\AdminController@index');

Route::post('/admin/check_login','Admin\AdminController@loginCheck');

Route::get('/admin/check_logout','Admin\AdminController@logoutCheck');
Route::get('/admin/profile','Admin\AdminController@profileCheck');
Route::get('/admin/edit_profile','Admin\AdminController@profileEdit');
Route::post('/admin/update_profile','Admin\AdminController@profileUpdate');
// Route::get('/admin/check_report','Admin\AdminController@reportCheck');
Route::get('/admin/log_report','Admin\AdminController@logReportCheck');

