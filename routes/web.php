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

Route::get('/hola-mundo', function () {
    return view('paginas/holamundo');
});

Route::get('/grabaciones/{nombre}/{anio?}/{cantidad?}', function ($nombre,$anio=null,$cantidad=null) {

    
    return view('paginas/grabaciones', compact('nombre', 'anio','cantidad'));
});

