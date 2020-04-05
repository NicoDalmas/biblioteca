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

// Rutas CRUD 

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