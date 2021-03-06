<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::post('groups/store', ['uses' => 'GroupsController@store', 'as' => 'groups.store']);
Route::get('cars/autocomplete' , ['uses' =>'CarsController@autocomplete', 'as' =>'cars.autocomplete']);
Route::resource('cars' , 'CarsController');

Route::get('/home', 'HomeController@index');

// Admin Users
Route::get('/admin', function()
{
	return view('admin.index');
});
Route::resource('admin/users' , 'AdminUsersController');

// category routes
Route::get('admin/category','Admin\CategoryController@index')->name('catIndex');
Route::get('admin/category/add','Admin\CategoryController@create')->name('catCreate');
Route::post('admin/category/add','Admin\CategoryController@store')->name('catStore');
Route::get('admin/category/delete/{id}','Admin\CategoryController@delete')->name('catDelete');
Route::get('admin/category/edit/{id}','Admin\CategoryController@edit')->name('catEdit');
Route::post('admin/category/edit/{id}','Admin\CategoryController@update')->name('catUpdate');
// End