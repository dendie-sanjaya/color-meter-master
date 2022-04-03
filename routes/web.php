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
Route::get('ColorGrade', 'ColorGradeController@index')->name('ColorGrade');
Route::get('colorList', 'ColorListController@index')->name('colorList');
Route::get('colorPattern', 'ColorPatternController@index')->name('colorPattern');
Route::get('config', 'ConfigController@index')->name('config');
Route::get('ColorGrade/edit/{id}', 'ColorGradeController@edit')->name('ColorGrade');
Route::get('colorList/edit/{id}', 'ColorListController@edit')->name('colorList');
Route::get('colorPattern/edit/{id}', 'ColorPatternController@edit')->name('colorPattern');
Route::get('config/edit/{id}', 'ConfigController@edit')->name('config');
Route::post('ColorGrade/save', 'ColorGradeController@save')->name('ColorGrade');
Route::post('colorPattern/save', 'ColorPatternController@save')->name('colorPattern');
Route::post('colorList/save', 'ColorListController@save')->name('colorList');
Route::post('colorList/saveAjax', 'ColorListController@saveAjax')->name('colorList'); 
Route::post('config/save', 'ConfigController@save')->name('config');
Route::get('ColorGrade/delete/{id}', 'ColorGradeController@delete')->name('ColorGrade');
Route::get('colorPattern/delete/{id}', 'ColorPatternController@delete')->name('colorPattern');
Route::get('colorList/delete/{id}', 'ColorListController@delete')->name('colorList');
Route::get('splashScreen', 'SplashScreenController@index')->name('splashScreen');


/*
Route::group(['middleware' => 'check.auth'], function() {
	//Route::get('dashboard', 'DashboardController@index');
});
*/
	
