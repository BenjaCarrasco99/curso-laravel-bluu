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

Route::get('fotos/{numero?}', function ($numero = 0) {
    return 'Estás en la galería de fotos: '.$numero;
})->where('numero', '[0-9]+');

Route::get('categorias/{nummero?}', function ($numero = 0) {
    return 'Estás en la categoría: '.$numero;
})->where('numero', '[0-9]+');

Route::view('galeria', 'fotos', ['numero' => 125]);
