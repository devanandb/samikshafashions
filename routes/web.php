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

Route::get('/', 'PagesController@index')->name('home');
Auth::routes();

Route::get('/admin/dashboard', 'DashboardController@index')->middleware('auth');
Route::get('/admin/dashboard/categories', 'DashboardController@categories')->middleware('auth');

Route::get('/api/categories', 'ApiController@categories');

Route::get('/verify/token/{token}', 'Auth\VerificationController@verify')->name('auth.verify');
Route::get('/verify/resend', 'Auth\VerificationController@resend')->name('auth.verify.resend');
