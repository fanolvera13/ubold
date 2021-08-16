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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard','App\Http\Controllers\dashboardController@index')->name
    ('dashboard');
    Route::get('menu', 'App\Http\Controllers\MenuController@index')->name('menu');
    Route::get('menu/crear', 'App\Http\Controllers\MenuController@crear')->name('crear_menu');
    Route::post('menu', 'App\Http\Controllers\MenuController@guardar')->name('guardar_menu');
    Route::get('menu/{id}/editar', 'App\Http\Controllers\MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}', 'App\Http\Controllers\MenuController@actualizar')->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', 'App\Http\Controllers\MenuController@eliminar')->name('eliminar_menu');
    Route::post('menu/guardar-orden', 'App\Http\Controllers\MenuController@guardarOrden')->name('guardar_orden');

    Route::get('menu-rol', 'App\Http\Controllers\MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'App\Http\Controllers\MenuRolController@guardar')->name('guardar_menu_rol');
});  
require __DIR__.'/auth.php';
