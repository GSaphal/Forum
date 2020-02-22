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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Role routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'Admin\AdminController@index');
Route::get('/admin/roles', 'Admin\RoleController@index');
Route::get('/admin/roles/create', 'Admin\RoleController@create');
Route::post('/admin/roles/create/submit', 'Admin\RoleController@store');
Route::get('/admin/roles/edit/{id}', 'Admin\RoleController@edit');
Route::get('/admin/roles/permissions/{id}', 'Admin\RoleController@viewPermissions');
Route::post('admin/roles/edit/{id}/submit','Admin\RoleController@editStore');
Route::get('admin/roles/delete/{id}','Admin\RoleController@destroy');

//Permission Routes
Route::get('/admin/permission','Admin\PermissionController@index');
Route::get('/admin/permission/create','Admin\PermissionController@create');
Route::get('/admin/permission/edit/{id}','Admin\PermissionController@edit');
Route::get('admin/permission/delete/{id}','Admin\PermissionController@destroy');
Route::post('admin/permission/edit/{id}/submit','Admin\PermissionController@editStore');

Route::post('/admin/permission/create/submit','Admin\PermissionController@store');
