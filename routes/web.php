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

// Ruta Página Principal
Route::get('/', function () {
    return view('welcome');
});
 
// Ruta Dashboard
//Route::get('admin/dashboard', 'Dashboard@index')->name('admin/dashboard');

// USERS CRUD 
/* Leer */
Route::get('admin/users', 'UserController@index')->name('admin/users/index');
/* Crear */
Route::get('admin/users/create', 'UserController@create')->name('admin/users/create');
Route::put('admin/users/store', 'UserController@store')->name('admin/users/store');
/* Actualizar */
Route::get('admin/users/edit/{id}', 'UserController@edit')->name('admin/users/edit');
Route::put('admin/users/update/{id}', 'UserController@update')->name('admin/users/update');
/* Eliminar */
Route::put('admin/users/delete/{id}', 'UserController@delete')->name('admin/users/delete');


// BOOKS CRUD
/* Leer */
Route::get('books', 'BookController@index')->name('books/index');
/* Crear */
Route::get('books/create', 'BookController@create')->name('books/create');
Route::put('books/store', 'BookController@store')->name('books/store');
/* Actualizar */
Route::get('books/edit/{id}', 'BookController@edit')->name('books/edit');
Route::put('books/update/{id}', 'BookController@update')->name('books/update');
/* Eliminar */
Route::put('books/delete/{id}', 'BookController@destroy')->name('books/delete');


// MOVEMENTS CRUD
/* Leer */
Route::get('movements', 'MovementController@index')->name('movements/index');
/* Crear */
Route::get('movements/create', 'MovementController@create')->name('movements/create');
Route::put('movements/store', 'MovementController@store')->name('movements/store');
/* Actualizar */
Route::get('movements/edit/{movements}', 'MovementController@edit')->name('movements/edit');
Route::put('movements/update/{id}', 'MovementController@update')->name('movements/update');
/* Eliminar */
Route::put('movements/delete/{id}', 'MovementController@destroy')->name('movements/delete');