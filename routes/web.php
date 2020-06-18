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

//Index
Route::get('competencias', 'CompetenciaControlador@index')->name('competencias.index');

//Crear
Route::get('competencias/crear', 'CompetenciaControlador@create')->name('competencias.create');

//Almacenar los datos a insertar
Route::post('competencias','CompetenciaControlador@store' )->name('competencias.store');

//Mostrar
Route::get('competencias/{competencia}','CompetenciaControlador@show')->name('competencias.show');

//Editar
Route::get('competencias/{competencia}/editar','CompetenciaControlador@edit')->name('competencias.edit');

//Guardar los cambios en la base de datos
Route::match(['put','patch'],'competencias/{competencia}/editar','CompetenciaControlador@update')->name('competencias.update');

//Eliminar los datos
Route::delete('competencias/{competencia}', 'CompetenciaControlador@destroy')->name('competencias.destroy');

//-------------------------------

//Almacenar los datos a insertar
/*
Route::post('competencias',function(){
    //
})->name('competencias.store');
*/

/*
Route::get('competencias/{competencia}', function($competencia){
    return "Mostrando la competencia {$competencia}";
})->name('competencias.show');
*/

/*
Route::get('competencias/{competencia}/editar', function($competencia){
    return "Formulario para modificar la competencia {$competencia}";
})->name('competencias.edit');
*/

//Guardar los cambios en la base de datos
/*
Route::match(['put','patch'],'competencias/{competencia}/editar',function($competencia){
    //
})->name('competencias.update');
*/

//Eliminar los datos
/*
Route::delete('competencias/{competencia}',function($competencia){
    //
})->name('competencias.destroy');
*/

Route::get('productos', 'ProductController@index')->name('products.index');

