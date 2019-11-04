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

Route::get('/','JobController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jobs/{id}/{job}','JobController@show')->name('jobs.show');
Route::get('/company/{id}/{company}','CompanyController@index')->name('company.index');
Route::get('/user/profile','UserProfileController@index');
Route::post('/profile/store','UserProfileController@store')->name('profile.store');
Route::post('/profile/coverletter','UserProfileController@coverletter')->name('profile.coverletter');
