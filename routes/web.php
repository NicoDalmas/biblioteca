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


// ROLE CRUD 
/* Leer */
Route::get('admin/roles', 'RolController@index')->name('admin/roles/index');
/* Crear */
Route::get('admin/roles/create', 'RolController@create')->name('admin/roles/create');
Route::put('admin/roles/store', 'RolController@store')->name('admin/roles/store');
/* Actualizar */
Route::get('admin/roles/edit/{id}', 'RolController@edit')->name('admin/roles/edit');
Route::put('admin/roles/update/{id}', 'RolController@update')->name('admin/roles/update');
/* Eliminar */
Route::put('admin/roles/delete/{id}', 'RolController@delete')->name('admin/roles/delete');


// Permission CRUD 
/* Leer */
Route::get('admin/permissions', 'PermissionController@index')->name('admin/permissions/index');
/* Crear */
Route::get('admin/permissions/create', 'PermissionController@create')->name('admin/permissions/create');
Route::put('admin/permissions/store', 'PermissionController@store')->name('admin/permissions/store');
/* Actualizar */
Route::get('admin/permissions/edit/{id}', 'PermissionController@edit')->name('admin/permissions/edit');
Route::put('admin/permissions/update/{id}', 'PermissionController@update')->name('admin/permissions/update');
/* Eliminar */
Route::put('admin/permissions/delete/{id}', 'PermissionController@delete')->name('admin/permissions/delete');


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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//prueba de permiso y roles
/*
Route::group(['middleware' => ['permission:destroy_notes']], function () {
    Route::get('notes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');
});
*/