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

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('colorGrade', 'colorGradeController@index')->name('colorGrade');
Route::get('colorList', 'ColorListController@index')->name('colorList');
Route::get('colorPattern', 'ColorPatternController@index')->name('colorPattern');
Route::get('colorGrade/edit/{id}', 'colorGradeController@edit')->name('colorGrade');
Route::get('colorList/edit/{id}', 'ColorListController@edit')->name('colorList');
Route::get('colorPattern/edit/{id}', 'ColorPatternController@edit')->name('colorPattern');
Route::post('colorGrade/save', 'colorGradeController@save')->name('colorGrade');
Route::post('colorPattern/save', 'ColorPatternController@save')->name('colorPattern');
Route::get('colorGrade/delete/{id}', 'colorGradeController@delete')->name('colorGrade');
Route::get('colorPattern/delete/{id}', 'ColorPatternController@delete')->name('colorPattern');

/*
Route::group(['middleware' => 'check.auth'], function() {
	//Route::get('dashboard', 'DashboardController@index');
});
*/
	
