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

// category routes by Iman
Route::get('admin/category/all','Admin\CategoryController@index')->name('catIndex');
Route::get('admin/category/add','Admin\CategoryController@add')->name('catAdd');
Route::post('admin/category/delete/{id}','Admin\CategoryController@delete')->name('catDelete');
Route::post('admin/category/edit/{id}','Admin\CategoryController@edit')->name('catEdit');
// End