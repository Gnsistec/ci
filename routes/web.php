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


Route::get('admin/ficha_inscripcion', 'AdminFichaInscripcionController@index');
Route::get('admin/ficha_evaluacion', 'AdminFichaEvaluacionController@index');
Route::get('admin/ficha_medica', 'AdminFichaMedicaController@index');
Route::get('admin/bitacora_transporte', 'AdminBitacoraTransporteController@index');
Route::get('admin/informe_medico', 'AdminInformeMedicoController@index');
Route::get('admin/envio_mensaje', 'AdminEnvioMensajeController@index');
Route::get('admin/planilla_pagos', 'AdminPlanillaPagosController@index');
//Route::get('admin/menu_semana', 'AdminMenuSemanaController@index');
//Route::get('admin/custom_uniformes', 'AdminCustomUniformesController@index');
Route::get('admin/galeria', 'AdminGaleriaController@index');

Route::resource('admin/custom_uniformes', 'AdminCustomUniformesController');
Route::resource('admin/custom_menu_semana', 'AdminMenuSemanaController');
